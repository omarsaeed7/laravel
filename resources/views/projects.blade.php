@extends('master')
@section('title')
Projects
@endsection
@section('content')

    <!-- Projects Section-->
    <section class="py-5">
        <div class="container px-5 mb-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <!-- Project Card 1-->
                    <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="p-5">
                                    <h2 class="fw-bolder"><a href="https://omarsaeed7.github.io/To-Do/" target="_blank">To-Do List Application</a></h2>
                                    <p>A To-Do list web application built using HTML, CSS, Vanilla Javascript and using local storage to save your tasks.</p>
                                </div>
                                <img class="img-thumbnail" style="width: 300px;" src="{{asset('assets/assets/imgs/Todo.png')}}" alt="..." />
                            </div>
                        </div>
                    </div>
                    <!-- Project Card 2-->
                    <div class="card overflow-hidden shadow rounded-4 border-0">
                        <div class="card-body p-0">
                            <div class="d-flex align-items-center">
                                <div class="p-5">
                                    <h2 class="fw-bolder"><a href="https://omarsaeed7.github.io/personal/" target="_blank">Landing Page</a></h2>
                                    <p>A Web page desing built using HTML, CSS</p>
                                </div>
                                <img class="mx-5" style="width: 300px;" src="{{asset('assets/assets/imgs/batman.png')}}" alt="..." />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to action section-->
    <section class="py-5 bg-gradient-primary-to-secondary text-white">
        <div class="container px-5 my-5">
            <div class="text-center">
                <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
                <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="{{route('main.contact')}}">Contact me</a>
            </div>
        </div>
    </section>
@endsection
