<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://use.fontawesome.com/448f6b23f4.js"></script>
  <title>Stages</title>
  <style>
    *{
      padding: 0;
      margin: 0;
      font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
      font-size: 16px;
      box-sizing: border-box;
    }
    .active{
  border-bottom: 3px solid #000 !important;
}
.penampungnav{
  position: relative;
  height: 100px;
}
.navbar{
  z-index: 2;
  width: 100%;
  height: 100px;
  background-image: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);
  display: flex;
  align-items: center;
  position: fixed;
}
.logo{
  width: 250px;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}
.logo h2 b{
  font-size: 30px;
}
.time{
  padding: 10px 15px;
  border-radius: 3px;
  background: whitesmoke;
}
.judul{
  position: absolute;
  display: flex;
  justify-content: center;
  width: 100%;
}
.judul h1{
  font-size: 26px;
  color: white;
}
.info{
  display: flex;
  position: absolute;
  right: 0;
  margin-right: 10px;
}
.profile{
  margin-right: 5px;
}
.profile p{
  color: white;
  text-align: end;
  font-size: 14px;
  margin-bottom: 5px;
}
.profile h1{
  color: white;
  cursor: pointer;
}
.section{
  position: relative;
  width: 100%;
  height: calc(100vh - 170px);
  /* background: whitesmoke; */
  background: url("https://i.ibb.co/LzW6HMT/mice3.jpg");
  background-size: cover;
  background-position: center center;
}
.content{
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding-top: 40px;
  box-sizing: border-box;
  position: relative;
}
.convention {
  position: absolute;
  right: 13px;
  text-align: center;
  background: #f8f8f9;
  padding: 15px 25px;
  border-radius: 5px;
  border: 0.5px solid #c7b3b3;
}
.convention h1{
  font-size: 20px !important;
}
.convention button {
  margin-top: 10px;
  cursor: pointer;
  width: 100%;
  padding: 10px 0px;
  background-image: linear-gradient(to right, #6a11cb 0%, #2575fc 100%);
  outline: none;
  border: none;
  color: white;
  border-radius: 5px;
}
.content h1{
  font-size: 22px;
  margin-bottom: 15px;
  color: black;
}
.content iframe{
  border-radius: 10px;
  width: 800px;
  height: 400px;
}
.section2{
  width: 100%;
  height: auto;
  background: #242424 !important;
  display: flex;
  padding: 45px 20px;
  box-sizing: border-box;
}
.content2{
      background: whitesmoke;
      width: 100%;
      height: 100%;
      display: flex;
      flex-wrap: wrap;
      border-radius: 8px;
}
.schedule{
        width: calc(100% / 3);
        height: 469px;
        border-right: 0.5px solid rgb(201, 186, 186);
        box-sizing: border-box;
        display: flex;
        flex-direction: column;
        padding: 10px 20px;
}
.judulschedule{
          width: 100%;
          padding: 25px 20px;
}
.judulschedule h1{
            font-size: 22px;
          }
.contentschedule{
  overflow-y: auto;
  height: 360px;
  max-height: 360px;
}
.judulevent{
            margin: 10px 0;
            border-radius: 8px;
            padding: 20px 30px;
            background: white;
}
.judulevent p{
              font-size: 14px;
            }
.day{
  width: calc(100% / 3);
  height: 469px;
  border-right: 0.5px solid rgb(201, 186, 186);
  box-sizing: border-box;
  padding: 10px 20px;
}
.judulday{
          width: 100%;
          padding: 25px 20px;
}
.judulday h1{
            font-size: 22px;
          }
.paragraf{
  padding: 0 20px;
  margin-bottom: 30px;
}
.paragraf p{
            font-size: 14px;
            line-height: 25px;
          }
.attachment{
  padding: 0 20px;
}
.judulattachment h1{
              font-size: 20px;
}
.centerattachment{
            display: flex;
            flex-direction: column;
            align-items: center;
}
.centerattachment i{
              font-size: 80px;
              color: gray;
              margin: 20px;
}
.centerattachment h1{
              font-size: 16px;
              margin: 20px 0;
}
.centerattachment p{
              font-size: 16px;
}
.chat{
        width: calc(100% /3);
        height: 469px;
        box-sizing: border-box;
        padding: 10px 40px;
}
.judulchat{
          padding: 25px 0;
          display: flex;
}
.judulchat h1{
            margin: 0 10px;
            cursor: pointer;
            border-bottom: 3px solid transparent;
          }
.judulchat h1:hover{
            box-sizing: border-box;
            border-bottom: 3px solid black;
          }
.roomss{
  display: block;
}
.roomchat{
  overflow-y: auto;
  height: 310px;
  max-height: 310px;
}
.cardchat{
            display: flex;
            margin: 20px 0;
}
.imgchat{
              width: 70px;
              display: flex;
              justify-content: center;
}
.imgchat span{
  width: 45px;
  height: 45px;
  background: blue;
  border-radius: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
}
.infochat h1{
  margin-bottom: 5px;
  font-size: 14px;
}
.isichat{
  background: white;
  padding: 20px;
  border-radius: 10px;
  max-width: 260px;
}
.isichat p{
  font-size: 15px;
}
.fromme{
  background: #c8eeac;
  float: right;
  margin-right: 5px;
}
.undian{
  display: none;
}
.chatme{
  display: flex;
  margin: 20px 0;
  /* float: right; */
  justify-content: flex-end;
}
.fromme{
  background: #c8eeac;
  float: right;
  /* height: auto; */
  position: relative;
  /* width: 100%; */
  margin-right: 5px;
}
.feedback{
  display: none;
}
.feedback textarea{
  box-sizing: border-box;
  width: 100%;
  padding: 15px 15px;
  border-radius: 8px;
  outline: none;
  border: none;
}
.feedback button{
  width: 100%;
  padding: 10px 0;
  background: blue;
  border: none;
  color: white;
  margin: 10px 0;
  border-radius: 8px;
  outline: none;
  cursor: pointer;
}
.sendmsg{
  width: 100%;
  display: flex;
  margin-top: 20px;
}
.sendmsg input{
  padding: 15px 20px;
  border-radius: 6px;
  border: none;
  outline: none;
  width: 280px;
  margin-right: 10px;
}
.sendmsg button{
  border: none;
}
.sendmsg i{
  font-size: 26px;
  padding: 10px;
  cursor:pointer;
}
.logomobile{
  position: absolute;
  display: none;
}
.clickprof{
  transition: .3s;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 5px 4px 5px 18px;
  border-radius: 25px;
  border: .5px solid #f8f8f8;
  background: white;
  cursor: pointer;
}
.clickprof:hover{
  box-shadow: 1px 3px 10px 0px rgba(0,0,0,0.75);
  /* border-radius: 25px; */
}
.logout{
  background: white;
  width: 250px;
  position:absolute;
  display: none;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-left: -150px;
  margin-top: 10px;
  border-radius: 3px;
  box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.75);;
}
.logout li{
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px 0;
  width: 100%;
  cursor: pointer;
}
.logout li h1{
  color: #000;
}
.logout li:hover{
  background: #dad8d8 !important;
  border-radius: 3px;
}
.nameprof{
  color: black !important;
  margin-top: 15px;
}
.profiles{
  width: 40px;
  height: 40px;
  background: #717171;
  border-radius: 100%;
  border: none;
  display: flex;
  justify-content: center;
  align-items: center;
}
.profileinside{
  width: 70px;
  height: 70px;
  border-radius: 100%;
  background: #717171;
  display: flex;
  justify-content: center;
  align-items: center;
}
.opened{
  font-size: 45px;
  color: white;
}
.showhide{
  display: block !important;
}
@media only screen and (max-width: 600px) {
  iframe{
    width: 96% !important;
    height: 300px;
    border-radius: 4px !important;
  }
  .section{
    height: calc(100vh - 100px) !important;
  }
  .convention{
    right: 0 !important;
    left: 0;
    bottom: 10px;
  }
  .content{
    padding-top: 5px !important;
  }
  .time {
    display: none;
  }
  .sendmsg input{
    padding: 10px 15px !important;
    width: 220px !important;
  }
  .day{
    height: 599px !important;
  }
  .chat, .day, .schedule {
    padding: 10px;
    border-bottom: 0.5px solid rgb(201, 186, 186);
    width: 463px !important;
  }
  .logomobile{
    display: block;
    bottom: calc(118px + 40px);
    z-index: 1;
  }
}
@media screen and (min-width: 1650px) {
  iframe{
    width: 1200px !important;
    height: 700px !important;
  }
  .chat, .day, .schedule {
    width: calc(100% / 3) !important;
    height: 100% !important;
  }
  .section2{
    height: calc(100vh - 100px)
  }
  .roomchat{
    height: 600px !important;
    max-height: 700px !important
  }
  .sendmsg input{
    padding: 25px 20px !important;
    width: 450px !important;
    margin-right: 15px !important;
  }
  .sendmsg i{
    font-size: 32px !important;
  }
  .contentschedule{
    height: 650px !important;
    max-height: 750px;
  }
}
  </style>
</head>
<body>
  <div class="container">
    <div class="penampungnav">
      <div class="navbar">
        <div class="logo">
          <!-- <a href="https://mice.id/PanduanCHSE-MICE/" style="text-decoration:none"> -->
            <h2 class="logo-light" style="font-family: sans-serif;cursor:pointer" height="35">
              <b style="color: red;">CH</b>
              <b style="color: chocolate;">SE</b>
              <b style="color: dodgerblue;">MI</b>
              <b style="color: lightgreen;">CE</b>
            </h2>
          <!-- </a> -->
        </div>
        <div class="time">
          <h1 id="time"></h1>
        </div>
        <div class="info">
          <div class="profile">
            <div class="clickprof" onclick="showlogout()">
              <div><i class="fa fa-bars" style="font-size: 18px;margin-right: 15px;color: #717171;"></i></div>
              <div class="profiles" ><i class="fa fa-user" style="font-size:20px;color: white;"></i></div>
            </div>
            <ul class="logout">
              <li style="display: flex;flex-direction: column; justify-content: center;">
                <div class="profileinside">
                  <i class="fa fa-user opened"></i>
                </div>
                <div>
                  <h1 class="nameprof"><?= $this->session->userdata('nama') ?></h1>
                </div>
              </li>
              <li style="background: whitesmoke;">
                <a href="<?=base_url('login/logout')?>" style="text-decoration:none;"><h1><i class="fa fa-sign-out" style="font-size:20px"></i> Logout</h1></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="content">
        <div class="logomobile">
          <img src="https://i.ibb.co/0njBn65/Layer-3-1.png" alt="">
          <!-- <img src="https://i.ibb.co/bW9nsXv/Layer-4.png" style="top:-5px;" alt=""> -->
        </div>
        <div class="convention">
          <h1>Join Convention</h1>
          <button>Join</button>
</form>
        </div>
        <h1>VIRTUAL EVENT CHSE MICE</h1>
        <!-- <iframe width="800" height="400" src="https://www.youtube.com/embed/4deVCNJq3qc?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
        <iframe src="<?=$url?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
    <div class="section2">
      <div class="content2">
        <div class="schedule">
          <div class="judulschedule">
            <h1>Even Stage CHSE MICE</h1>
          </div>
          <div class="contentschedule">
          <div class="judulevent">
              <h1>Registrasi Undangan & Peserta</h1>
              <p>09.30 - 10.00</p>
            </div>
            <div class="judulevent">
              <h1>Safety Briefing </h1>
              <p>10.00 - 10.10</p>
            </div>
            <div class="judulevent">
              <h1>Performance Art
                (Pertunjukan Tari Traditional Bali)</h1>
              <p>10.10 - 10.20</p>
            </div>
            <div class="judulevent">
              <h1>Menyanyikan Lagu Indonesia Raya</h1>
              <p>10.20 – 10.25</p>
            </div>
            <div class="judulevent">
              <h1>OPENING</h1>
              <p>10.25 - 10.30</p>
            </div>
            <div class="judulevent">
              <h1>Doa</h1>
              <p>10.30 - 10.35</p>
            </div>
            <div class="judulevent">
              <h1>Laporan Panitia Penyelenggaran
                Sosialisasi Panduan CHSE
                Penyelenggaraan Kegiatan MICE
                dari Kementerian Pariwisata dan
                Ekonomi Kreatif / Badan Parekraf RI </h1>
              <p>10.35 - 10.45</p>
            </div>
            <div class="judulevent">
              <h1>Sambutan Wakil Gubernur Bali</h1>
              <p>10.45 - 10.50</p>
            </div>
            <div class="judulevent">
              <h1>Sambutan Pembukaan dari
                Kementerian Pariwisata dan Ekonomi
                Kreatif / Badan Parekraf RI</h1>
              <p>10.50 – 11.00</p>
            </div>
            <div class="judulevent">
              <h1>Presentasi Rancangan Panduan
                Kebersihan, Kesehatan,
                Keselamatan, serta Kelestarian
                Lingkungan (Cleanliness, Health,
                Safety and Environmental
                sustainability/ (CHSE)
                Penyelenggaraan Kegiatan MICE</h1>
              <p>11.00 – 12.00</p>
            </div>
            <div class="judulevent">
              <h1>Makan Siang dan Sholat P</h1>
              <p>12.00 – 13.00</p>
            </div>
            <div class="judulevent">
              <h1>Presentasi Rancangan Panduan
                Kebersihan, Kesehatan,
                Keselamatan, serta Kelestarian
                Lingkungan (Cleanliness, Health,
                Safety and Environmental
                sustainability/ (CHSE)
                Penyelenggaraan Kegiatan MICE
                </h1>
              <p>13.00 – 15.30</p>
            </div>
            <div class="judulevent">
              <h1>Penandatanganan Berita Acara </h1>
              <p>15.30 – 15.45</p>
            </div>
            <div class="judulevent">
              <h1>Penutup</h1>
              <p>15.45 – 16.00</p>
            </div>
          </div>
        </div>
        <div class="day">
          <div class="judulday">
            <h1>Main Stage CHSE</h1>
          </div>
          <div class="paragraf">
            <p>Panduan Pelaksanaan Kebersihan, Keselamatan serta Kelestarian Lingkungan
              (Cleanliness, Health, Safety and Environmental sustainability/ CHSE) penyelenggaraan kegiatan
              Meeting, Incentive, Convention, Exhibition (MICE) yang diharapkan dapat menjadi acuan bagi
              Asosiasi, Industri dan seluruh stakeholders MICE dalam menyelenggarakan kegiatan MICE di era
              New Normal.
            </p>
          </div>
          <div class="attachment">
            <div class="judulattachment">
              <h1>Attachment</h1>
            </div>
            <div class="centerattachment">
              <a href="https://mice.id/PanduanCHSE-MICE//download/panduan.pdf" target="_blank"><i class="fa fa-file"></i></a>
              <!-- <h1>Attachment File is Empty</h1>
              <p>Admin Booth hasn't attached any files yet.</p> -->
            </div>
          </div>
        </div>
        <div class="chat">
          <div class="judulchat">
            <h1 onclick="chat()" class="chats active">Chat</h1>
            <h1 onclick="feedback()" class="feedbacks">Feedback</h1>
            <h1 onclick="undian()" class="undians">Undian</h1>
          </div>
          <div class="roomss">
              <div id="roomchat" class="roomchat">
                  <div class="cardchat">
                      <div class="imgchat">
                          <span>io</span>
                      </div>
                      <div class="infochat">
                          <h1></h1>
                          <div class="isichat">
                              <p></p>
                          </div>
                      </div>
                  </div>
                  <div class="chatme">
                      <div class="isichat fromme">
                          <p></p>
                      </div>
                  </div>
              </div>
              <div class="sendmsg">
                  <input type="hidden" id="user_id" name="user_id" value="<?= $this->session->userdata('id')?>">
                  <input type="hidden" id="reply_to" name="reply_to" value="0">
                  <input type="text" id="message" name="message" placeholder="Compose Message">
                  <button onclick="kirimpesan()"><i class="fa fa-paper-plane"></i></button>
              </div>
          </div>
          <div class="feedback">
              <textarea cols="10" rows="4" placeholder="Feedback"></textarea>
              <button>Send</button>
          </div>
          <div class="undian">
              <p>The Winner Is</p>
          </div>
      </div>
  </div>
    </div>
  </div>
<script>
var x = setInterval(function() {
    var date = new Date();
    var jam = date.getHours() + ':' + date.getMinutes() + ':' + date.getSeconds();
    document.getElementById("time").innerHTML = jam;
}, 1000);
function chat() {
    document.querySelector('.feedbacks').classList.remove('active')
        document.querySelector('.undians').classList.remove('active')
        document.querySelector('.chats').classList.add('active')
        document.querySelector('.roomss').style.display = "block";
    document.querySelector('.feedback').style.display = "none";
    document.querySelector('.undian').style.display = "none";
}
function feedback() {
    document.querySelector('.chats').classList.remove('active')
        document.querySelector('.undians').classList.remove('active')
        document.querySelector('.feedbacks').classList.add('active')
        document.querySelector('.feedback').style.display = "block";
    document.querySelector('.roomss').style.display = "none";
    document.querySelector('.undian').style.display = "none";
}
function undian() {
    document.querySelector('.chats').classList.remove('active')
        document.querySelector('.feedbacks').classList.remove('active')
        document.querySelector('.undians').classList.add('active')
        document.querySelector('.feedback').style.display = "none";
    document.querySelector('.roomss').style.display = "none";
    document.querySelector('.undian').style.display = "block";
}
function showlogout() {
  document.querySelector('.logout').classList.toggle('showhide');
}
</script>
</body>
</html>
