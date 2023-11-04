@extends('layouts.komunitas.layouts')

@section('content')
<section class="h-100 ">
    <div class="container py-2 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-12 col-xl-12">
          <div class="card">
            <div class="rounded-top text-white d-flex flex-row gradient-custom-2" style="background-color: #000; height:200px;">
              <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;margin-left:30px">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
                  alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                  style="width: 150px; z-index: 1">
                  <a href="{{route('profile.edit',1)}}" class="btn btn-outline-dark" data-mdb-ripple-color="dark" style="z-index: 1;">
                    Edit profile
                  </a>
                  
              </div>
              <div class="ms-3" style="margin-top: 130px;margin-left:30px;">
                <h5>Kafekoding</h5>
                <p>New York</p>
                
              </div>
             
            </div>
            <div class="p-4 text-black" style="background-color: #f8f9fa;">
              <div class="d-flex justify-content-end text-center py-1">
                <div>
              
                  <p class="small text-muted mb-0">12 Januari 1945</p>
                </div>
                <div class="px-3">
                
                  <p class="small text-muted mb-0">08654335678</p>
                </div>
               
              </div>
            </div>
            <div class="card-body p-4 text-black">
              <div class="mb-5">
                <p class="lead fw-normal mb-1">Description</p>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati illum, molestiae vel, tempora labore rerum ex ea vero ipsam nam ipsa asperiores pariatur nihil quam nobis a at accusamus sint.</p>
              </div>
              <a href="https://farshid.dk/?ref=igc" target="_blank" class="text-primary bold" style=""><strong>farshid.dk</strong></a>
             
            </div>
            <div class="d-flex justify-content-around">
                <button type="button" class=" btn-simpan1 ok">Terhubung</button>
                <button type="button" class=" btn-simpan1 ok">Kirimkan Pesan</button>
              </div>
              
          </div>
        
        </div>
      </div>
    </div>
  </section>
 
  <section>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card ">  
                    <div class="card-header bg-color-radius">
                      <span class="float-right">
                        <i class="fas fa-ellipsis-h fa-md"></i>
                      </span>
                      <div class="d-flex pt-2">
                        <span>
                          <img src="https://pbs.twimg.com/media/Em2_xBbXUAEVDx1.jpg" class="postprofilphoto">
                        </span>
                        <span class="d-flex flex-column">
                          <span class="posttext align-top"><a href="https://www.linkedin.com/in/malan/" target="_blank" style="color: #212529;">David J. Malan</a></span>
          
                          <span class="card-text title-post-time ml-2 align-middle">I teach CS50</span>
          
                          <span class="card-text title-post-time ml-2 align-bottom">25a <i class="fas fa-globe-americas fa-sm"></i></span>                  
                        </span>
                      </div>
                    </div>
                    <div>
                      <p class="card-text post-text ml-3">
                        They have done great things! Tebrikler Kodluyoruz!
                      </p>
                      <div>
                        <img
                          src="https://pbs.twimg.com/media/Em2_xBbXUAEVDx1.jpg"
                          class="card-img-top mb-1 postphoto"
                          alt="..."/>
                      </div>
                      <span class="ml-3"><img src="https://static-exp1.licdn.com/sc/h/d310t2g24pvdy4pt1jkedo4yb" alt=""></span>
                      <span class=""><img src="https://static-exp1.licdn.com/sc/h/5thsbmikm6a8uov24ygwd914f" alt=""></span>
                      <span class="like-number"><img src="https://static-exp1.licdn.com/sc/h/7fx9nkd7mx8avdpqm5hqcbi97" alt="">  958</span>
                      <div class="card-footer bg-color-radius mt-1 d-flex justify-content-around">
                        <span>
                          <button class="btn btn-outline-light">
                          <i class="far fa-thumbs-up fa-md mt-0" style="font-size: 1.2rem"><span class="ml-2 mediatext">Beğen</span></i>
                          </button>
                        </span>
                        <span>
                          <button class="btn btn-outline-light">
                          <i class="far fa-comment fa-md mt-0" style="font-size: 1.2rem"><span class="ml-2 mediatext">Yorum Yap</span></i>
                          </button>
                        </span>
                        <span>
                          <button class="btn btn-outline-light">
                          <i class="fas fa-share fa-md mt-0" style="font-size: 1.2rem"><span class="ml-2 mediatext">Paylaş</span></i>
                          </button>
                        </span>
                        <span>
                          <button class="btn btn-outline-light">
                          <i class="fas fa-paper-plane fa-md mt-0" style="font-size: 1.2rem"><span class="ml-2 mediatext">Gönder</span></i>
                          </button>
                        </span>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-md-6">
                <div class="card ">  
                    <div class="card-header bg-color-radius">
                      <span class="float-right">
                        <i class="fas fa-ellipsis-h fa-md"></i>
                      </span>
                      <div class="d-flex pt-2">
                        <span>
                          <img src="https://pbs.twimg.com/media/Em2_xBbXUAEVDx1.jpg" class="postprofilphoto">
                        </span>
                        <span class="d-flex flex-column">
                          <span class="posttext align-top"><a href="https://www.linkedin.com/in/malan/" target="_blank" style="color: #212529;">David J. Malan</a></span>
          
                          <span class="card-text title-post-time ml-2 align-middle">I teach CS50</span>
          
                          <span class="card-text title-post-time ml-2 align-bottom">25a <i class="fas fa-globe-americas fa-sm"></i></span>                  
                        </span>
                      </div>
                    </div>
                    <div>
                      <p class="card-text post-text ml-3">
                        They have done great things! Tebrikler Kodluyoruz!
                      </p>
                      <div>
                        <img
                          src="https://pbs.twimg.com/media/Em2_xBbXUAEVDx1.jpg"
                          class="card-img-top mb-1 postphoto"
                          alt="..."/>
                      </div>
                      <span class="ml-3"><img src="https://static-exp1.licdn.com/sc/h/d310t2g24pvdy4pt1jkedo4yb" alt=""></span>
                      <span class=""><img src="https://static-exp1.licdn.com/sc/h/5thsbmikm6a8uov24ygwd914f" alt=""></span>
                      <span class="like-number"><img src="https://static-exp1.licdn.com/sc/h/7fx9nkd7mx8avdpqm5hqcbi97" alt="">  958</span>
                      <div class="card-footer bg-color-radius mt-1 d-flex justify-content-around">
                        <span>
                          <button class="btn btn-outline-light">
                          <i class="far fa-thumbs-up fa-md mt-0" style="font-size: 1.2rem"><span class="ml-2 mediatext">Beğen</span></i>
                          </button>
                        </span>
                        <span>
                          <button class="btn btn-outline-light">
                          <i class="far fa-comment fa-md mt-0" style="font-size: 1.2rem"><span class="ml-2 mediatext">Yorum Yap</span></i>
                          </button>
                        </span>
                        <span>
                          <button class="btn btn-outline-light">
                          <i class="fas fa-share fa-md mt-0" style="font-size: 1.2rem"><span class="ml-2 mediatext">Paylaş</span></i>
                          </button>
                        </span>
                        <span>
                          <button class="btn btn-outline-light">
                          <i class="fas fa-paper-plane fa-md mt-0" style="font-size: 1.2rem"><span class="ml-2 mediatext">Gönder</span></i>
                          </button>
                        </span>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
  </section>

@endsection