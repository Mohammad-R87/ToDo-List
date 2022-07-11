@extends('panel')
@section('content')
    <section class="d-flex" style="width: 78%">
        @foreach ($category as $ids)
            <div class="d-flex flex-column flex-shrink-0 bg-light category">
                <a href="/"
                    class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none w-100 name-category"
                    style="background-color: #2ed7d8">
                    <i class="far fa-lightbulb" style="font-size: 25px; margin: 5px;"></i>
                    <span class="fs-4">{{ $ids }}</span>
                </a>
                <ul class="nav nav-pills flex-column mb-auto p-2">
                    @foreach ($tasks as $stmt)
                        <li class="item">
                            <a href="#" class="nav-link link-dark" style="margin: 5px 0;">
                                {{ $stmt->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </section>
@endsection
