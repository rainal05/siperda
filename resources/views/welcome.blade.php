@extends('layouts.frontend.master')
@section('content')
    {{-- <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kegiatan Pembelajaran</h2>
          <p>Kegiatan Pembelajaran di TK NEGERI PEMBINA 2 KOTA JAMBI</p>
        </div>


        <div class="faq-list">
          <ul>
              @foreach ($pelajaran as $pel)
                <li data-aos="fade-up" data-aos-delay="100">
                    <i class="bx bx-help-circle icon-help"></i>
                        <a data-toggle="collapse" class="collapse" href="#faq-list-1">
                        {{$pel->judul}}
                        <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
                        </a>
                    <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                        <p>
                        {{$pel->isi}}
                        </p>
                    </div>
                </li>
                @endforeach
          </ul>
        </div>

      </div>
    </section> --}}
@endsection
