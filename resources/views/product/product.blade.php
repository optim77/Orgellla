@extends('master')
@section('promo')
    <div class="pt-2 pb-5"></div>
    <div class="container">
        @foreach($product as $p)
            <div class="row">
                <div class="col-sm-12 p-3">
                    <a class="text-dark" href="">{{$p->category->name}}</a>
                </div>
                <div class="col-sm-6">
                    <img data-toggle="modal" data-target=".bd-example-modal-lg" class="w-100 img-responsive" src="../upload/photos/{{$p->photo1}}">
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <img  class=" img-responsive" src="../upload/photos/{{$p->photo1}}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 text-center">
                    <p class="display-4">{{$p->name}}</p>
                    <p class="display-4">Pozostało: {{$p->amount}}</p>
                    <p class="display-4">{{$p->price}} PLN</p>
                    <button class="btn-lg btn btn-danger mt-2">Dodaj do koszyka</button><br>
                    <button class="btn-lg btn btn-info mt-2">Przejdź do płatności</button>
                </div>

                <div class="col-sm-12 mt-5">
                    <hr>
                    <p class="lead text-center">{{$p->description}}</p>
                </div>

                    @if($p->photo2 != null)
                        <div class="col-sm-12 text-center">
                            <img data-toggle="modal" data-target=".bd-example-modal-lg" class="w-25 img-responsive" src="../upload/photos/{{$p->photo2}}">
                        </div>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <img  class=" img-responsive" src="../upload/photos/{{$p->photo2}}">
                                </div>
                            </div>
                        </div>
                    @endif

                    @if($p->photo3 != null)
                    <div data-toggle="modal" data-target=".bd-example-modal-lg"  class="col-sm-12 text-center mt-2">
                        <img class="w-25 img-responsive" src="../upload/photos/{{$p->photo3}}">
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <img  class=" img-responsive" src="../upload/photos/{{$p->photo3}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if($p->photo4 != null)
                    <div data-toggle="modal" data-target=".bd-example-modal-lg" class="col-sm-12 text-center mt-2">
                        <img class="w-25 img-responsive" src="../upload/photos/{{$p->photo4}}">
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <img  class=" img-responsive" src="../upload/photos/{{$p->photo4}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if($p->photo5 != null)
                    <div data-toggle="modal" data-target=".bd-example-modal-lg" class="col-sm-12 text-center mt-2">
                        <img class="w-25 img-responsive" src="../upload/photos/{{$p->photo5}}">
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <img  class=" img-responsive" src="../upload/photos/{{$p->photo5}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if($p->photo6 != null)
                    <div data-toggle="modal" data-target=".bd-example-modal-lg" class="col-sm-12 text-center mt-2">
                        <img class="w-25 img-responsive" src="../upload/photos/{{$p->photo6}}">
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <img  class=" img-responsive" src="../upload/photos/{{$p->photo6}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

            </div>
        @endforeach
    </div>

    <div class="footer mt-3 bg-dark p-3">

    </div>

    @stop