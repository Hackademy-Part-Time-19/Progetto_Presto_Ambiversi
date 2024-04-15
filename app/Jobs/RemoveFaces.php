<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Intervention\Image\ImageManager;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;


class RemoveFaces implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $announcement_image_id;
    /**
     * Create a new job instance.
     */
    public function __construct($announcement_image_id)
    {
        $this->announcement_image_id = $announcement_image_id;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $i = Image::find($this->announcement_image_id);
        if (!$i) {
            return;
        }
        $srcPath = storage_path('app/public/' . $i->path);
        $image = file_get_contents($srcPath);

        putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('google_credential.json'));

        $imageAnnotator = new ImageAnnotatorClient();
        $response = $imageAnnotator->faceDetection($image);
        $faces = $response->getFaceAnnotations();

        foreach ($faces as $face) {
            $vertices = $face->getBoundingPoly()->getVertices();
            $bounds = [];
            foreach ($vertices as $vertex) {
                $bounds[] = [$vertex->getX(), $vertex->getY()];
            }
            $w = $bounds[2][0] - $bounds[0][0];
            $h = $bounds[2][1] - $bounds[0][1];
            $watermarkPath = base_path('resources/img/Trollface_non-free.png');
            $watermark = imagecreatefrompng($watermarkPath);

            // Carica l'immagine originale
            $image = imagecreatefromstring(file_get_contents($srcPath));

            // Inserisci il watermark nell'immagine originale
            imagecopyresampled($image, $watermark, $bounds[0][0], $bounds[0][1], 0, 0, $w, $h, imagesx($watermark), imagesy($watermark));

            // Salva l'immagine manipolata
            imagepng($image, $srcPath);

            // Libera la memoria dalle immagini create
            imagedestroy($image);
            imagedestroy($watermark);
        }

        $imageAnnotator->close();
    }
}
