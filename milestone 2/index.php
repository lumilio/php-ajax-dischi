

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel='stylesheet' href="main.css">
</head>
<body>
    <div id="root">
        <header>
            <div class="container-fluid d-flex justify-content-center">
                <div class="container">
                    <img src="img/logo.png" alt="">
                </div>
            </div>
        </header>
        <main>
            <div class="container-fluid d-flex justify-content-center">
                <div class="container d-flex align-items-center flex-column">
                    <div class="box-form container">
                        <div class="container-fluid d-flex justify-content-center">
                            <div class="container">
                                <form>
                                    <label class="text-white">Search for Type :</label>
                                    <select v-model="selected1" @change="showCD(selected1)">
                                        <option value="All" select>All</option>
                                        <option v-for="item in generi" :key='item.id' :value="item">{{item}}</option> <!------------------------- loop -->
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="Cardbox"> 
                        <div v-for='item in dischi' :key="item.id" class="card-model">
                            <img :src="item.poster" alt="">
                            <h4>{{item.title.toUpperCase()}}</h4>
                            <span>{{item.author}}</span>
                            <span>{{item.year}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js' integrity='sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="main.js"></script>
</body>
</html>


