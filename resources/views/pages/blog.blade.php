@extends('layouts.masterlayout')
@section('title')
    Portfolio-Blog
@endsection
@section('blog')
<section id="blog" class="blog-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Blog
            </h3>
            <p class="subtitle-a">
              Laravel is a popular open-source PHP framework known for its elegant syntax, developer-friendly tools, and robust features
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <a href="blog-single.html"><img src="assets/img/post-1.jpg" alt="" class="img-fluid"></a>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category">Travel</h6>
                </div>
              </div>
              <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
              <p class="card-description">
                Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                a pellentesque nec,
                egestas non nisi.
              </p>
            </div>
            <div class="card-footer">
              <div class="post-author">
                <a href="#">
                  <img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                  <span class="author">Md Shahin alom</span>
                </a>
              </div>
              <div class="post-date">
                <span class="bi bi-clock"></span> 10 min
              </div>
            </div>
          </div>
      </div>
      <div class="col-md-4">
        <div class="card card-blog">
          <div class="card-img">
            <a href="blog-single.html"><img src="assets/img/post-2.jpg" alt="" class="img-fluid"></a>
          </div>
          <div class="card-body">
            <div class="card-category-box">
              <div class="card-category">
                <h6 class="category">food and Breverage</h6>
              </div>
            </div>
            <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
            <p class="card-description">
              Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
              a pellentesque nec,
              egestas non nisi.
            </p>
          </div>
          <div class="card-footer">
            <div class="post-author">
              <a href="#">
                <img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                <span class="author">Md shahin alom</span>
              </a>
            </div>
            <div class="post-date">
              <span class="bi bi-clock"></span> 10 min
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-blog">
          <div class="card-img">
            <a href="blog-single.html"><img src="assets/img/post-3.jpg" alt="" class="img-fluid"></a>
          </div>
          <div class="card-body">
            <div class="card-category-box">
              <div class="card-category">
                <h6 class="category">Web Design</h6>
              </div>
            </div>
            <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
            <p class="card-description">
              Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
              a pellentesque nec,
              egestas non nisi.
            </p>
          </div>
          <div class="card-footer">
            <div class="post-author">
              <a href="#">
                <img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                <span class="author">Md Shahin alom</span>
              </a>
            </div>
            <div class="post-date">
              <span class="bi bi-clock"></span> 10 min
            </div>
          </div>
        </div>
      </div>
       
      </div>
    </div>
  </section>
@endsection