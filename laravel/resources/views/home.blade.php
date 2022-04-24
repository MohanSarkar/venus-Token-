@extends('layouts.main')
@section('content')
<html lang="en">
<body>
  <main>
    <div class=" mainHeader d-flex justify-content-center align-items-center">
      <div class=" text-center text-light">
        <h3>A TOKEN WOMAN BY WOMAN TO CREATE</h3>
        <h1>EDUCATIONAL OPPERTUNITIES</h1>
        <h1 class="fw-bold">TOWAREDS EMPOWERMENT</h1>
        <button class="button">Discover Venus Token</button>
      </div>
    </div>
    <!---main banner end-->


    <!-- introduce section start -->
    <div id="OBJECTIVE">
      <div class="container-fluid  mt-5">
        <div class="row ">
          <div class="col-sm-3 col-md-6 col-12 d-flex justify-content-center align-items-center">
            <img src="{{ asset('/assets/images/section-1.png') }}" width="400" height="400" alt="" class="img-fluid">
          </div>
          <div class="col-md-6 col-12 p-5">
            <h2 class="service_color">Objective</h2>
            <p>To educate women, worldwide in technology and finance. The Venus Token creates an educational
              ecosystem, which provides a network of educational opportunities for women, including Coursework
              and
              Experiences available including practice and use of Computers, Cryptocurrency, Blockchain
              Technology, AI, Digitization, Computer Programming, Ecommerce.</p>
          </div>
        </div>
      </div>
      <div class="ty ddd" id="MISSION">
        <!-- <div class="bg-light ddd"> -->
        <div class="container-fluid ">
          <div class="row my-5  py-4 mission-flex">
            <div class="col-sm-3 col-md-6 col-12 p-5 mt-5 ">
              <h2 class="service_color">Misson</h2>
              <p>Offering educational and scholarship opportunities for women to enter into industries using
                technology. Criteria for the specific education and training include technical coursework and
                financial limitations. Coursework includes but it not limited to programming, e-commerce,
                blockchain, javascript, C++, java, solidity, cryptocurrency, token development, NFT graphics,
                graphic design, website design, SEO, financial technology, investments, social media marketing,
                digital business, electronics, engineering, machine learning, AI and robotics.</p>
            </div>
            <div class="col-md-6 col-12 d-flex justify-content-center align-items-center ">
              <img src="{{ asset('/assets/images/section-2.png') }}" width="400" height="400" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid" id="PURPOSE">
      <div class="row ">
        <div class="col-sm-3 col-md-6 col-12 d-flex justify-content-center align-items-center">
          <img src="{{ asset('/assets/images/section-3.png') }}" width="400" height="400" alt="" class="img-fluid">
        </div>
        <div class="col-md-6 col-12 p-5  ">
          <h2 class="service_color">Purpose</h2>
          <p>To educate women, worldwide in technology and finance. The Venus Token creates an educational
            ecosystem, which provides a network of educational opportunities for women, including Coursework
            and
            Experiences available including practice and use of Computers, Cryptocurrency, Blockchain
            Technology, AI, Digitization, Computer Programming, Ecommerce.</p>
        </div>
      </div>
    </div>
    </div>
    <!-- -----introduce section end -->

    <!-- -tecnology section-- -->
    <div class=" tec_text  mt-5 d-flex  justify-content-center align-items-center container-fluid ">
      <div class="container-fluid ">
        <div class="text-center">
          <h1 class="">TECNOLOGY</h1>
          <p class="px-5">VENUS TOKEN is a digital asset running on the pre-existing blockchain of Ethereum. In addition
            to VENUS TOKEN, many different types of tokens run on the Ethereum platform. The VENUS TOKEN has been
            developed on the Ethereum Network and is classified as a NFT, Non-Fungible ERC721 Token. This standard
            defines a smart contract framework to allow for the creation, management and trading of our VENUS TOKENS.
          </p>
        </div>
      </div>
    </div>
    <!-- -tecnology section end-- -->
    <div class="buyVenus p-5" id="TECHNOLOGY">
      <div class="container-fluid ">
        <div class="row">
          <div class="col-md-6 col-12 pe-4 text-light">
            <h1>How to <br /> Buy Venous Token</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque nobis eveniet ipsum eum excepturi ea
              fugit vel voluptates blanditiis, numquam aspernatur error incidunt ducimus veritatis veniam, nulla
              provident. At suscipit rerum magni. Pariatur aliquam quidem vero rem eaque ex dolorem eos consectetur
              asperiores impedit dicta incidunt, cupiditate tempora ab? Ducimus.<br />Lorem ipsum dolor sit amet
              consectetur, adipisicing elit. Blanditiis deserunt quibusdam explicabo sapiente nulla iure repellendus,
              quos illum itaque ipsum aliquid dolores optio nihil vel magni ab praesentium placeat suscipit?Lorem ipsum
              dolor sit, amet consectetur adipisicing elit. Cumque sint necessitatibus alias beatae repudiandae soluta
              numquam in perferendis fuga tempora.</p>
          </div>
          <div class="col-md-6 col-12">
            <img src="{{ asset('/assets/images/mid.png') }}" height="400px" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-md-6 col-12 text-center pt-5 justify-content-center container-fluid ">
          <button class="button">Discover Venus Token</button>
        </div>
      </div>
    </div>
    <!-- ---tecnology section end -->
    <!-- contact section -->

    <div class="container-fluid py-5" id="CONTACT">
      <div class="row">
        <div class="col-sm-3 col-md-6 col-12 px-3 mb-3">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14599.564438462976!2d90.4224876!3d23.82247085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e6!4m0!4m0!5e0!3m2!1sen!2sbd!4v1646678334246!5m2!1sen!2sbd"
            width="100%" height="410" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="col-md-6 col-12">
          <form action="getData" method="POST">
              @csrf
            <div class="mb-3">
              <input type="text" name="username" placeholder="Enter your name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <span class="text-danger">
                  @error('username')
                  {{'Please fill in all the required fields'}}
                  @enderror
                </span>
            </div>
            <div class="mb-3">
              <input type="email" name="userpassword" placeholder="Enter your email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <span class="text-danger">
                @error('userpassword')
                {{'Please fill in all the required fields'}}
                @enderror
              </span>
            </div>
            <div class="form-floating">
              <textarea class="form-control" name="text" placeholder="Leave a comment here" id="floatingTextarea2"
                style="height: 250px"></textarea>
            </div>
            <div class="d-grid mt-3">
              <button class="btn btn-warning fw-bold" type="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
@endsection