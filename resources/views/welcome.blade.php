<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href = "{{asset('css/home.css')}}" />
	<link rel = "stylesheet" type = "text/css" href = "{{asset('css/style.css')}}" />

    <title>สนามฟุตบอลหญ้าเทียม อารีน่า กรู๊ฟ นวนคร</title>
    <style>
       
    </style>
</head>
<body>
    <div class="welcome-message">
         สนามฟุตบอลหญ้าเทียม อารีน่า กรู๊ฟ นวนคร
    </div>
    <header>
        
        <a href="\signin" class="login-button">เข้าสู่ระบบ</a>
    </header>
    <main>
        <div id="home" class="page active">
            <div class="content-section">
                <h1>Welcome to สนามฟุตบอลหญ้าเทียม อารีน่า กรู๊ฟ นวนคร</h1>
                <p>สนามฟุตบอลอารีน่า กรู๊ฟ นวนคร ได้รับการก่อตั้งขึ้นจากความรักในกีฬาฟุตบอลของกลุ่มผู้ก่อตั้ง ที่ต้องการสร้างสนามฟุตบอลที่ดีในจังหวัดปทุมธานี เราต้องการให้สนามแห่งนี้เป็นสถานที่ที่ให้โอกาสทุกคนได้เล่นฟุตบอลและเพลิดเพลินไปกับกีฬา</p>
                <img src="image/arena_glogo.png" alt="Football Field">
            </div>
            <div class="additional-images">
            <h2>รายละเอียดสนาม</h2>
                <div class="additional-box">
                    <div class="box" onclick="openModal('image/arena_m6.jpg')">
                        <img src="image/arena_m6.jpg" alt="">
                        <div class="details">
                            <h3>สนามกลางแจ้ง</h3>
                            <p>สนามกลางแจ้ง เหมาะสำหรับการเล่นในช่วงกลางวันและกลางคืน ราคา 700 บาท ต่อชั่วโมง</p>
                        </div>
                    </div>
                    <div class="box" onclick="openModal('image/arena_m5.jpg')">
                        <img src="image/arena_m5.jpg" alt="">
                        <div class="details">
                            <h3>สนามในร่ม</h3>
                            <p>สนามหญ้าเทียมในร่มมีคุณภาพสูง ที่ช่วยให้การเล่นฟุตบอลเป็นไปอย่างสมบูรณ์ ราคา 700 บาท ต่อชั่วโมง</p>
                        </div>
                    </div>
                    <div class="box" onclick="openModal('image/arena_g3.jpg')">
                        <img src="image/arena_g3.jpg" alt="">
                        <div class="details">
                            <h3>สนามกลางแจ้ง</h3>
                            <p>สนามกลางแจ้ง เหมาะสำหรับการเล่นในช่วงกลางวันและกลางคืน ราคา 700 บาท ต่อชั่วโมง</p>
                        </div>
                    </div>
                    <div class="box" onclick="openModal('image/arena_m4.jpg')">
                        <img src="image/arena_m4.jpg" alt="">
                        <div class="details">
                            <h3>สนามในร่ม</h3>
                            <p>สนามหญ้าเทียมในร่มมีคุณภาพสูง ที่ช่วยให้การเล่นฟุตบอลเป็นไปอย่างสมบูรณ์ ราคา 700 บาท ต่อชั่วโมง</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="image-box">
                <div class="box" onclick="openModal('image/arena_g1.jpg')">
                    <img src="image/arena_g1.jpg" alt="">
                    <div class="details">
                        <h3>ภาพสนามฟุตบอล</h3>
                        <p>ภาพบรรยากาศของสนามฟุตบอลที่คุณจะได้สัมผัส.</p>
                    </div>
                </div>
                <div class="box" onclick="openModal('image/arena_g4.jpg')">
                    <img src="image/arena_g4.jpg" alt="">
                    <div class="details">
                        <h3>ภาพการเล่นฟุตบอล</h3>
                        <p>ภาพการเล่นฟุตบอลในสนามของเรา.</p>
                    </div>
                </div>
                <div class="box" onclick="openModal('image/arena_g2.jpg')">
                    <img src="image/arena_g2.jpg" alt="">
                    <div class="details">
                        <h3>ภาพที่จอดรถ</h3>
                        <p>ภาพที่จอดรถสำหรับลูกค้า.</p>
                    </div>
                </div>
                <div class="box" onclick="openModal('image/arena_m4.jpg')">
                    <img src="image/arena_m4.jpg" alt="">
                    <div class="details">
                        <h3>ภาพสนามฟุตบอล</h3>
                        <p>ภาพในสนามฟุตบอล.</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="about" class="page">
            <div class="content-section">
                <h2>เกี่ยวกับเรา</h2>
                <p>เราคือสนามฟุตบอลที่มุ่งมั่นในการให้บริการที่ดีที่สุดแก่ลูกค้าของเรา ด้วยการดูแลสนามอย่างดีและให้บริการที่เป็นมืออาชีพ เราหวังว่าจะเป็นสถานที่ที่คุณจะกลับมาเล่นฟุตบอลอีกครั้ง</p>
            </div>
        </div>
        <div id="Book" class="page">
            <div class="content-section">
                <h2>จองสนาม</h2>
                <p>กรุณาเลือกวันและเวลาที่คุณต้องการจองสนามฟุตบอลของเรา</p>
                <!-- Add your booking form or booking interface here -->
            </div>
        </div>
        <div id="reviews" class="page">
            <div class="content-section">
                <h2>รีวิว</h2>
                <p>อ่านความคิดเห็นจากลูกค้าของเราเกี่ยวกับประสบการณ์การเล่นฟุตบอลที่สนามของเรา</p>
                <!-- Add your reviews content or interface here -->
            </div>
        </div>
        <div id="Redeem points" class="page">
            <div class="content-section">
                <h2>แลกคะแนน</h2>
                <p>ตรวจสอบคะแนนของคุณและแลกเป็นสิทธิพิเศษหรือของรางวัล</p>
                <!-- Add your points redemption content or interface here -->
            </div>
        </div>
    </main>

    <!-- Modal for images -->
    <div id="myModal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content" id="img01" alt="">
    </div>

    <script>
        function showPage(pageId) {
            // Hide all pages
            document.querySelectorAll('.page').forEach(page => page.classList.remove('active'));
            // Show the selected page
            document.getElementById(pageId).classList.add('active');
        }

        function openModal(imageSrc) {
            const modal = document.getElementById("myModal");
            const modalImg = document.getElementById("img01");
            modal.style.display = "block";
            modalImg.src = imageSrc;
        }

        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }
    </script>
</body>
</html>
