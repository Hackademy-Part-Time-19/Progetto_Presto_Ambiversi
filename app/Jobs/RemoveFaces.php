<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
<<<<<<< HEAD
use Intervention\Image\ImageManager;
=======
>>>>>>> 49958fee1329a06a8909b2f9928284b6f25d71d9
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;
<<<<<<< HEAD
=======
use Spatie\Image\Image as SpatieImage;
use Spatie\Image\Manipulations;
>>>>>>> 49958fee1329a06a8909b2f9928284b6f25d71d9


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
<<<<<<< HEAD
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

=======
            $image = SpatieImage::load($srcPath);
            $image->watermark(base_path('storage/app/public/images/pixel.png'))
                ->watermarkPosition('top-left')
                ->watermarkPadding($bounds[0][0], $bounds[0][1])
                ->watermarkWidth($w, Manipulations::UNIT_PIXELS)
                ->watermarkHeight($h, Manipulations::UNIT_PIXELS)
                ->watermarkFit(Manipulations::FIT_STRETCH);
            $image->save($srcPath);
        }
>>>>>>> 49958fee1329a06a8909b2f9928284b6f25d71d9
        $imageAnnotator->close();
    }
}