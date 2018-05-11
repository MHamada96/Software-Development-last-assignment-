<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <h1 id="heder">EgypTrains-قطارات مصر </h1>
    <form method="post" action="trains.php">
    	<div class="content">
            
        	<select class="input" name="leave">
            <option disabled="true">.....عرض جميع المحطات</option>
            <option value="اسوان">اسوان</option>
            <option value="القصر">القصر</option>
            <option value="ادفو">ادفو</option>
            <option value="سوهاج">سوهاج</option>
            <option value="طما">طما</option>
            <option value="صدفه">صدفه</option>                                 
            <option value="اسيوط">أسيوط</option>
            <option value="المنيا">المنيا</option>
            <option value="القاهره">القاهره</option>
            </select><label>محطه المغادره</label>
            <br><br><br>

        	<select class="input" name="reach" >
            <option disabled="true">.....عرض جميع المحطات</option>
            <option value="اسيوط">أسيوط</option>
            <option value="سوهاج">سوهاج</option>
            <option value="قنا">قنا</option>
            <option value="القصر">القصر</option>
            <option value="القاهره">القاهره</option>
            <option value="المنيا">المنيا</option>
            <option value="اسوان">اسوان</option>
            </select> <label>محطه الوصول</label>

        	<div class="dropdown">
            <select class="input" name="type" >
            <option disabled="true">...عرض جميع القطارات</option>
             <option value="all">الجميع</option>
            <option value="vip">VIP</option>
            <option value="مكيف">مكيف</option>
            <option value="نوم">نوم</option>
            <option value="ركاب">اكسبرس بعربيات مميزة</option>
            </select> <label>درجــه القطار</label>
            </div>

            <input type="submit" class="btn btn-default submit" name='train' value="show">
        </div>

        
    </form>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
