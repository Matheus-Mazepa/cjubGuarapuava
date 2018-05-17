@extends('layouts.app')
@section('content')
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Foto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="card-img-top img-responsive" id="img-modal" alt="Imagem congresso" style=" width: 100%; display: block;" src="" data-holder-rendered="true">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <main role="main">

        <section class="jumbotron text-center images">
            <div class="container">
                <h1 class="jumbotron-heading">Fotos</h1>
                <p class="lead text-muted">Fotos do congresso disponíveis para download.</p>
            </div>
        </section>
        <div class="album py-5 bg-light">
            <div class="container" id="album">
                @foreach($images->chunk(3) as $imagesChunked)
                    <div class="row">
                        @foreach($imagesChunked as $image)
                            <div class="col-md-4">
                                <div class="card mb-4 box-shadow">
                                    <img class="card-img-top img-responsive"  alt="Imagem congresso" style="height: 225px; width: 100%; display: block;" src="{{$image->path}}" data-holder-rendered="true">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <a type="button" href="{{ route('images.download', $image->id) }}" class="btn btn-sm btn-outline-secondary">Baixar</a>
                                                <button type="button" onclick="toggleModal('{{$image->path}}');" class="btn btn-sm btn-outline-secondary">Ver</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
        <div style="text-align:center;">
            <div class="custom-pagination">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-sm-push-2 col-md-6 col-md-push-3 col-lg-4 col-lg-push-4">
                        @for($i = 1; $i <= $pages; $i++)
                            <button onclick="nextPage({{$i}})">
                                {{ $i }}
                            </button>
                        @endfor
                    </div>

                    <div class="col-xs-offset-2 col-xs-4 col-sm-offset-0 col-sm-2 col-sm-pull-8 col-md-3 col-md-pull-6 col-lg-pull-4 col-lg-4">
                        <button onclick="nextPage({{1}})" class="btn btn-default pull-right">
                            Primeiro
                        </button>
                    </div>

                    <div class="col-xs-4 col-sm-2 col-md-3 col-lg-4">
                        <button onclick="nextPage({{$pages}})" class="btn btn-default pull-left">
                            Ultima
                        </button>
                    </div>
                </div>
            </div>
        </div>


    </main>
@endsection
@section('footer')
    <script>
        function nextPage(page) {
            let route = '/fotos/get-page/' + page;
            axios.get(route)
                .then(response => {
                    addImages(response.data);
                })
                .catch(error => {
                    console.log(error)
                });

        }

        function addImages(images) {
            $album = $('#album');
            $album.html('');
            let card = '';

            let count = 0;
            for (let i = 0; i < images.length; i++) {
                let image = images[i];
                count++;
                if (i%3 == 0 )
                    card += '<div class="row">';

                card += '<div class="col-md-4">\n' +
                    '                                <div class="card mb-4 box-shadow">\n' +
                    '                                    <img class="card-img-top"  alt="Imagem congresso" style="height: 225px; width: 100%; display: block;" src="' + image.path + '" data-holder-rendered="true">\n' +
                    '                                    <div class="card-body">\n' +
                    '                                        <div class="d-flex justify-content-between align-items-center">\n' +
                    '                                            <div class="btn-group">\n' +
                    '                                                <a type="button" href="/fotos/' + image.id + '/download" class="btn btn-sm btn-outline-secondary">Baixar</a>\n' +
                    '                                                <button type="button" onclick="toggleModal(\'' + image.path + '\');" class="btn btn-sm btn-outline-secondary">Ver</button>\n' +
                    ' </div>\n' +
                    '                                        </div>\n' +
                    '                                    </div>\n' +
                    '                                </div>\n' +
                    '                            </div>';

                if (count == 3 ) {
                    card += '</div>';
                    count = 0;
                }

            }
            $album.append(card);
        }

        function toggleModal(path) {
            $('#img-modal').attr('src', path);
            $('#exampleModal').modal('toggle');
        }
    </script>
@endsection