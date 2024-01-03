<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600&display=swap');

body {
    background-image: linear-gradient(40deg,
            hsl(340, 88%, 51%) 0%,
            hsl(345, 81%, 54%) 0%, 10%,
            hsl(345, 73%, 49%) 0%,24%,
            hsl(340, 73%, 50%) 42%,
            hsl(337, 79%, 41%) 57%,
            hsl(347, 65%, 54%) 68%,
            hsl(340, 84%, 53%) 75%,
            hsl(342, 70%, 51%) 81%,
            hsl(347, 74%, 53%) 85%,
            hsl(330, 83%, 43%) 89%,
            hsl(337, 70%, 45%) 92%,
            hsl(327, 80%, 49%) 94%,
            hsl(340, 90%, 55%) 96%,
            hsl(340, 76%, 45%) 97%,
            hsl(327, 70%, 44%) 98%,
            hsl(335, 87%, 54%) 99%,
            hsl(350, 77%, 59%) 100%,
            hsl(342, 70%, 46%) 100%);
    background-repeat: no-repeat;
    height: 99vh;
    overflow-y: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: 'Quicksand', sans-serif;
}

.formBox {
    padding: 15px;
    text-align: center;
    min-height: 50vh;
    min-width: 50vw;
    display: flex;
    flex-direction: column;
    background: #f8f8f885;
    border-radius: 30px;
    backdrop-filter: blur(10px);

}

h2 {
    margin-bottom: -10px;
}

p {
    font-weight: 500;
    font-size: 1.1em;
}
</style>
<body>
    <div class="formBox">
        <h2>Contact Us</h2>
        <p>You will hear from us at the earliest!</p>
        <form action="#">
            <div class="nameInp">
                <i class="fa fa-user icon"></i>
                <input type="text" placeholder="Full Name" name="name" id="name">

            </div>
        </br>
            <div class="mailInp">
                <i class="fa fa-envelope"></i>
                <input type="email" name="mail" id="mail" placeholder="Email">
            </div></br>
            <div class="phoneInp">
                <i class="fa-solid fa-phone"></i>
                <input type="number" name="phone" id="phone" placeholder="Phone" min="100000" max="9999999999">
            </div></br>
            <div class="queryInp">
                <textarea name="query" id="query" cols="30" rows="5"
                    placeholder="Any comment or your query"></textarea>
            </div></br>
            <div class="submitBtn">
                <button id="btn" onclick="notif()">Send</button>
            </div></br>
        </form>
        <p class="extra">You can also contact us Aaron Computers@2023</p>
    </div>
    
</body>