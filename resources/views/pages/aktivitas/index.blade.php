@extends('layouts.komunitas.layouts')

@section('content')

<div class="container">
    <div class="row">
   
      <!-- orta panel -->
      <div class="col-sm-8">
        <div class="container">
          <div class="row">
              <div class="col-md-8" style="margin-bottom: 30px;"></div> <!-- Kolom untuk elemen lainnya -->
              <div class="col-md-4">
                  <div class="form-group rounded-lg">
                      <label for="exampleSelect" class="small">Category :</label>
                      <select class="form-control form-control-sm custom-select" id="exampleSelect">
                          <option value="">Select an option</option>
                          <option value="option1">Option 1</option>
                          <option value="option2">Option 2</option>
                          <option value="option3">Option 3</option>
                          <option value="option4">Option 4</option>
                          <option value="option5">Option 5</option>
                          <option value="option6">Option 6</option>
                      </select>
                  </div>
              </div>
          </div>
      </div>
     
     
      <div class="card card-activity">
        <h5 class="card-header ">
         Create a story
        </h5>
        <div class="card-body m-0 p-0 form-outline  border-0">
         <div> <textarea class="form-control border-0 "  rows="4"  placeholder="Please write"></textarea></div>
        
         <div class="containerr">
          <div class="image-input">
            <input type="file" accept="image/*" id="imageInput">
            <label for="imageInput" class="image-button"><i class="far fa-image"></i> </label>
            
            <img src="" class="image-preview">
            <span class="change-image">Choose different image</span>
          </div> 
          <div>
            <button type="button" class="btn-simpan">Post</button>
            </div> 
          </div>         
        </div>
        
      </div>
      
        <!--* 1.Post *-->
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
        <!--* 2.Post *-->
        <div class="card mt-2">  
          <div class="card-header bg-color-radius">
            <span class="float-right">
              <i class="fas fa-ellipsis-h fa-md"></i>
            </span>
            <div class="d-flex pt-2">
              <span>
                <img src="https://picsum.photos/id/92/45" class="postprofilphoto">
              </span>
              <span class="d-flex flex-column">
                <span class="posttext align-top"><a href="https://www.linkedin.com/in/malan/" target="_blank" style="color: #212529;">Ozan Halis İLTER</a></span>

                <span class="card-text title-post-time ml-2 align-middle">Team Leader at YetGen | CodeCraft | Kablosuz Beyin | IEEE MEF...</span>

                <span class="card-text title-post-time ml-2 align-bottom">1s <i class="fas fa-globe-americas fa-sm"></i></span>                  
              </span>
            </div>
          </div>
          <div>
            <p class="card-text post-text ml-3">
              Erhan Erkut hocamız ile birlikte YetGen'de harika şeyler yapmak için geliyoruz!
            </p>
            <div>
              <img
                src="https://miro.medium.com/max/1080/1*gdDWFSvHDt57DS2zsh_0Bg.png"
                class="card-img-top mb-1 postphoto"
                alt="..."/>
            </div>
            <span class="ml-3"><img src="https://static-exp1.licdn.com/sc/h/d310t2g24pvdy4pt1jkedo4yb" alt=""></span>
            <span class=""><img src="https://static-exp1.licdn.com/sc/h/5thsbmikm6a8uov24ygwd914f" alt=""></span>
            <span class="like-number"><img src="https://static-exp1.licdn.com/sc/h/7fx9nkd7mx8avdpqm5hqcbi97" alt="">  210</span>
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
        <!--* 3.Post *-->
        <div class="card mt-2">  
          <div class="card-header bg-color-radius">
            <span class="float-right">
              <i class="fas fa-ellipsis-h fa-md"></i>
            </span>
            <div class="d-flex pt-2">
              <span>
                <img src="https://picsum.photos/id/92/45" class="postprofilphoto">
              </span>
              <span class="d-flex flex-column">
                <span class="posttext align-top"><a href="https://www.linkedin.com/in/malan/" target="_blank" style="color: #212529;">Ramazan Sancar</a></span>

                <span class="card-text title-post-time ml-2 align-middle">Co-Founder at Kablosuz Beyin | Intern & Community Lead at Kod...</span>

                <span class="card-text title-post-time ml-2 align-bottom">25a <i class="fas fa-globe-americas fa-sm"></i></span>                  
              </span>
            </div>
          </div>
          <div>
            <p class="card-text post-text ml-3">
              Cat Özel Harekat'a katılmak isteyenleri şöyle alalım..
            </p>
            <div>
              <img
                src="https://picsum.photos/id/888/538/320"
                class="card-img-top mb-1 postphoto"
                alt="..."/>
            </div>
            <span class="ml-3"><img src="https://static-exp1.licdn.com/sc/h/d310t2g24pvdy4pt1jkedo4yb" alt=""></span>
            <span class=""><img src="https://static-exp1.licdn.com/sc/h/5thsbmikm6a8uov24ygwd914f" alt=""></span>
            <span class="like-number"><img src="https://static-exp1.licdn.com/sc/h/7fx9nkd7mx8avdpqm5hqcbi97" alt="">  224</span>
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


      <div class="col-sm-4">
        <!-- sol panel -->
        <div class="card">
          <div class="card-header profile-bg">
            <div class="text-center">
              <img
                src="https://patika-prod.s3-eu-central-1.amazonaws.com/userFiles/ayya/profilePicture"
                class="rounded-circle border border-2 border-white"
                style="
                  width: 70px;
                  height: 70px;
                "
              />
            </div>
          </div>
          <div class="card-body mt-3 px-3">
            <p class="card-title header text-center">
              <a href="https://www.linkedin.com/in/aysenuraydin16/" target="_blank" style="color: #212529;">Kafekoding</a>
            </p>
           
            <div class="col-lg-12" >
              <div class="mb-4">
                <div class="">
                  <div class="row">
                    <div class="col-md-6">
                      <p class="mb-0">Standing Date</p>
                    </div>
                    <div class="col-md-6">
                      <p class="text-muted mb-0">12 Januari 1945</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md-6">
                      <p class="mb-0">Alamat</p>
                    </div>
                    <div class="col-md-6">
                      <p class="text-muted mb-0">New York City</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md-6">
                      <p class="mb-0">Phone</p>
                    </div>
                    <div class="col-md-6">
                      <p class="text-muted mb-0">(097) 234-5678</p>
                    </div>
                    

                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md-6">
                      <p class="mb-0">Website </p>
                    </div>
                    <div class="col-md-6">
                      <p class="text-muted mb-0">kafekoding.com</p>
                    </div>
                    

                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md-6">
                      <p class="mb-0">Description</p>
                    </div>
                    <div class="col-md-6">
                      <p class="text-muted mb-0 text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus delectus sequi odit cum saepe molestias exercitationem quaerat velit nemo reiciendis, iusto suscipit quasi, aliquid ut vero facilis autem veniam voluptatum!</p>
                    </div>
                  </div>
                
                  
                </div>
              </div>
           
           
          </div>
         
        </div>
       
      </div>

   
    </div>
  </div>
  

@endsection