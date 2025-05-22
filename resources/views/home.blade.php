@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Dashboard') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!--div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">
                                {{ __('You are logged in!') }}

                                
                            </p>
                        </div>
                    </div>
                </div>
            </div--!>
            <!-- /.row -->
     <!--   </div>--><!-- /.container-fluid -->
      <!-- </div>-->
    <!-- /.content -->
   <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{ URL::to(path: '/') }}/images/kat.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">Katrina Shane Dungo</h3>

                <p class="text-muted text-center">Graphic Designer</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Email:</b> <a class="float-right">shanedungo@gmail.com</a>
                  </li>
                  <li class="list-group-item">
                    <b>Contact</b> <a class="float-right">09975570322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Location</b> <a class="float-right">San Vicente, Apalit Pampanga</a>
                  </li>
                  </li>
                  
                </ul>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- About Me Box --!>
            <div class="card card-primary">
              <div class="card-header">
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">• Logo Designing</span> <br>
                   <span class="tag tag-danger">• Video Editing</span> <br>
                   <span class="tag tag-danger">• Album Designing</span> <br>
                   <span class="tag tag-danger">• Web Designing</span> <br>
                   <span class="tag tag-danger">• Photography</span> <br>
                </p>

                <hr>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
              
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                     <!-- About Me Box -->

                      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <p class="text-muted">
                 I am a passionate and detail-oriented Information Technology graduate with a specialization in Graphic Design, eager to apply my technical and creative skills in a dynamic work environment. <br>
                 My expertise lies in creating visually compelling graphics, designing user-friendly interfaces, and optimizing digital content for various platforms. <br>
                 I am a fast learner, problem-solver, and team player who thrives in collaborative environments. I am eager to contribute my skills and creativity to a company that values innovation and quality design.<br>
                </p>

                <hr>

            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Education</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

                <p class="text-muted">
                  San Vicente Elementary School (June 2010 - March 2016) <br>
                  Dominican School of Apalit INC. (June 2016 - March 2019) <br>
                  AMA Basic Education Apalit INC. (August 2019 - April 2022) <br>
                  B.S. in Information Technology from Don Honorio Venture State University (2022 - Current)
                </p>

                <hr>

                      <!-- /.user-block -->
                      <h1>Achievements</h1>
                      <p>
                        • 7th Place in Photojournalist in SOUTHZONE (2019) <br>
                        • Best in Research (2022)<br>
                        • With Honors (2022) <br>
                        • 4th Runner Up Ms. DAC 2023 <br>
                        • Ms. Punctual (2023) <br>
                        • Crowds Favorite (2023) <br>
                        • Best in Casual Wear (2023) <br>
                        • First Place in JUANA COLERETE in Women's Month GFPS Event (2023) <br>
                        • Best in Advocacy in Women's Month GFPS Event (2024) <br>
                        • 2nd Runner Up JUANA RAMP in Women's Month GFPS Event (2024) <br>
                      </p>

@endsection