@extends('master')

@section('content')

<!-- Alquran - Surah -->
<section id="content-1">
    <div class="col-md-6 col-sm-6 col-xs-12 box-1">
        <p class="text-center text-title">Al-Qur'an</p>
        <p class="text-center text-subtitle">{{ $total_surah }} Surah</p>
    </div>
</section>
<!-- End of Alquran -->

<!-- Alquran - Ayah -->
<section id="content-1">
    <div class="col-md-6 col-sm-6 col-xs-12 box-1">
        <p class="text-center text-title">Al-Qur'an</p>
        <p class="text-center text-subtitle">{{ $total_ayah }} Ayah</p>
    </div>
</section>
<!-- End of Alquran -->

<!-- Users -->
<section id="content-3">
    <div class="col-md-6 col-sm-6 col-xs-12 box-3">
        <p class="text-center text-title">Users</p>
        <p class="text-center text-subtitle">1 Users</p>
    </div>
</section>
<!-- End of Users -->

<!-- Users -->
<section id="content-3">
    <div class="col-md-6 col-sm-6 col-xs-12 box-3">
        <p class="text-center text-title">Feedback</p>
        <p class="text-center text-subtitle">{{ $total_feedback }} Feedback</p>
    </div>
</section>
<!-- End of Users -->

<!-- Sentiment
<section id="content-4">
    <div class="col-md-12 col-sm-12 col-xs-12 box-4">
        <p><a href="">Today</a> &nbsp; <a href="">Week</a> &nbsp; <a href="">Month</a> &nbsp; <a href="">Year</a></p>
        <p class="text-subtitle">Total Sentiment</p>
    </div>
</section>
 End of Sentiment -->

@endsection