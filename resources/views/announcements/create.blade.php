<x-layouts.app>
    
                <x-layout>
                    
                    <x-navbar></x-navbar>
                    <x-success></x-success>
                
                    <div class="headerImage">
                        <img style="padding: 0px 80px;" src="{{ Storage::url('/Imagini/image-header.png') }}" width="100%" alt="">
                     
                    </div>
          







                </x-layout>

            



            </div>
        </div>
    </div>
    <div class="BoxCreaAnnuncio">     <livewire:create-announcement />
    
    </div>
    <x-footer/>
    
</x-layouts.app>