<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style1.css">

<style>


.panel1 {
    margin-top: 5px;
    display: none;
    background-color: #ffffe0 ;
    overflow: hidden;
	font-size: 20px;
    width: 99%;
    
}
.panel {
    
    display: none;
    background-color: #ffffe0 ;
    overflow: hidden;
	font-size: 20px;
    width: 99%;
    
}
p.rtl {
    direction: rtl;
	
}


.dropbt3 {
    background: url(z4.png) center no-repeat;
  
    
    
    border: none;
    cursor: pointer;
	position: fixed;
    height: 30px;
	width: 30px;
	
	top: 10px;
	right: 120px;
}
.dropbt4 {
    background: url(z6.png) center no-repeat;
  
    
    
    border: none;
    cursor: pointer;
	position: fixed;
    height: 30px;
	width: 30px;
	
	top: 10px;
	left: -30px;
}
.dropbtn {
    background: url(z2.png) center no-repeat;
  
    
    
    border: none;
    cursor: pointer;
	position: fixed;
    height: 35px;
	width: 35px;
	
	top: 10px;
	right: 10px;
}
.dropbtnn {
    background: url(z1.png) center no-repeat;
   
   
    
    
    border: none;
    cursor: pointer;
	position: fixed;
    height: 35px;
	width: 35px;
	
	top: 10px;
	right: 50px;
}
.dropbtnnn {
    background: url(z3.png) center no-repeat;
   
   
    
    
    border: none;
    cursor: pointer;
	position: fixed;
    height: 35px;
	width: 35px;
	
	top: 10px;
	right: 85px;
}
.dropbtnnnn {
    background: url(z5.png) center no-repeat;
   
   
    
    
    border: none;
    cursor: pointer;
	position: fixed;
    height: 30px;
	width: 30px;
	
	top: 10px;
	right: 150px;
}
.dropbtnnnn1 {
    background: url(z7.png) center no-repeat;
   
   
    
    
    border: none;
    cursor: pointer;
	position: fixed;
    height: 30px;
	width: 30px;
	
	top: 10px;
	right: 185px;
}
.dropbtnnnn2 {
    background: url(z9.png) center no-repeat;
   
   
    
    
    border: none;
    cursor: pointer;
	position: fixed;
    height: 25px;
	width: 25px;
	
	top: 15px;
	right: -30px;
}

.sidenav {
    height: 70%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 49px;
	border-left: 1px solid #bcc90e;
	border-bottom: 1px solid #bcc90e;
	
    right: 0;
    background-color: #ffffe0;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 10px;
    text-align:center;
}

.sidenavv {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 61px;
	border-left: 1px solid #bcc90e;
	border-bottom: 1px solid #bcc90e;
	
    right: 0;
    background-color: #ffffe0;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 10px;
    text-align:center;
}
.sidenav a {
    padding: 1px 8px 8px 8px;
    text-decoration: none;
    font-size: 20px;
    color: #000000;
    display: block;
    transition: 0.3s;
	

}

.sidenav a:hover{
    color: red;
}
.sidenav1 {
    height: 0;
    width: 40px;
    position: fixed;
    z-index: 1;
    top: 50px;
	
	border-right: 1px solid #bcc90e;
	border-left: 1px solid #bcc90e;
	border-bottom: 1px solid #bcc90e;
    right: 35px;
    background-color: #bcc90e;
    overflow-x: hidden;
    transition: 0.3s;
    padding-top: 0px;
    text-align:center;
}

.sidenav1 a {
    padding: 1px 8px 8px 8px;
    text-decoration: none;
    font-size: 20px;
    color: #000000;
    display: block;
    transition: 0.3s;
	

}

.sidenav1 a:hover{
    color: red;
}
.sidenav2 {
    height: 0;
    width: 60px;
    position: fixed;
    z-index: 1;
    top: 50px;
	
	border-right: 1px solid #bcc90e;
	border-left: 1px solid #bcc90e;
	border-bottom: 1px solid #bcc90e;
    right: 60px;
    background-color: #ffffe0;
    overflow-x: hidden;
    transition: 0.3s;
    padding-top: 0px;
    text-align:center;
}

.sidenav2 a {
    padding: 1px 8px 8px 8px;
    text-decoration: none;
    font-size: 20px;
    color: #000000;
    display: block;
    transition: 0.3s;
	

}

.sidenav2 a:hover{
    color: red;
}
.colo {
color: red;
}
.hood{
   height: 51px;
   width: 100%;
   position: fixed;
   top: 0;
   right: 0;
   background-color: #bcc90e;
}
.dodo{
margin-top: 55px;
margin-bottom: 60px;
}
.bk1{
background-color: white;
height: 30px;
padding-top: 5px;
}
.bk2{
background-color:#ffffe0;
height: 30px;
padding-top: 5px;
}
.bk3{
background-color:#f7f2df;
height: 30px;
padding-top: 5px;
}
.houda{
margin-top: 6px;
}
.sidenav3 {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 41px;
	border-left: 1px solid #bcc90e;
	border-bottom: 1px solid #bcc90e;
	
    left: 0;
    background-color: #ffffe0;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 10px;
    text-align:center;
}

.clicktest {
background-color: #eded74;
    font-family: 'Scheherazade', serif;
    cursor: pointer;
    padding: auto;
    width: 80%;
    border: none;
    outline: none;
    font-size: 26px;
    transition: 0.4s;
	margin-top: 10px;
	border-radius: 8px;
	margin-right: 10%;
	margin-left: 10%;


}
.clicktest:hover {
    background-color: #bcc90e; 
}
.puti{

font-size: 23px;
text-align: center;
width: 30%;
}
.puti1{
font-family: 'Scheherazade', serif;
text-align: center;
font-size: 23px;

}
.puti3{
text-align: right;
position: fixed;
left: -500px;

}
.clicktest1 {
background-color: #eded74;
    font-family: 'Scheherazade', serif;
    cursor: pointer;
    padding: auto;
    width: 80%;
    border: none;
    outline: none;
    font-size: 26px;
    transition: 0.4s;
	margin-top: 3px;
	border-radius: 8px;
	margin-right: 10%;
	margin-left: 10%;
    margin-bottom: 10px;

}
.clicktest1:hover {
    background-color: #bcc90e; 
}
.sende {
background-color: #eded74;
    font-family: 'Scheherazade', serif;
    cursor: pointer;
    padding: auto;
    width: 80%;
    border: none;
    outline: none;
    font-size: 26px;
    transition: 0.4s;
	margin-top: 3px;
	border-radius: 8px;
	margin-right: 10%;
	margin-left: 10%;
    margin-bottom: 10px;

}
.sidenav5 {
    height: auto;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 51px;
	
	border-right: 1px solid #bcc90e;
	border-left: 1px solid #bcc90e;
	border-bottom: 1px solid #bcc90e;
    left: 0;
    background-color: #ffffe0;
    overflow-x: hidden;
    transition: 0.3s;
    padding-top: 0px;
    text-align:center;
}

.sidenav5 a {
    padding: 1px 8px 8px 8px;
    text-decoration: none;
    font-size: 20px;
    color: #000000;
    display: block;
    transition: 0.3s;
	

}

.sidenav5 a:hover{
    color: red;
}
.showntest {
font-family: 'Scheherazade', serif;
font-size: 26px;
margin-top: 10px;
margin-bottom: 5px;
}
.sidenav6 {
    height: auto;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 50px;
	
	border-right: 1px solid #bcc90e;
	border-left: 1px solid #bcc90e;
	border-bottom: 1px solid #bcc90e;
    left: 0;
    background-color: #ffffe0;
    overflow-x: hidden;
    transition: 0.3s;
    padding-top: 0px;
    text-align:center;
}

.sidenav6 a {
    padding: 1px 8px 8px 8px;
    text-decoration: none;
    font-size: 20px;
    color: #000000;
    display: block;
    transition: 0.3s;
	

}

.sidenav6 a:hover{
    color: red;
}
.sidenav7 {
    height: auto;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 50px;
	
	border-right: 1px solid #bcc90e;
	border-left: 1px solid #bcc90e;
	border-bottom: 1px solid #bcc90e;
    left: 0;
    background-color: #ffffe0;
    overflow-x: hidden;
    transition: 0.3s;
    padding-top: 0px;
    text-align:center;
}

.sidenav7 a {
    padding: 1px 8px 8px 8px;
    text-decoration: none;
    font-size: 20px;
    color: #000000;
    display: block;
    transition: 0.3s;
	

}

.sidenav7 a:hover{
    color: red;
}
.passage1{
width: 100%

}
.input1{
margin-bottom: 10px;
margin-top: 10px;
}
.inputfile{
margin-top: 10px;

}
.boy1 {
     display: none;
}

</style>
</head>
<body id="back" style="background-color:#ffffe0;">
  <div class="hood">
  
  <div class="amiri" style="text-align:center;font-size: 25px"></div>
  <button class="dropbtn" onclick="openNav()"></button>
  <button class="dropbtnn" onclick="openNav1()"></button>
  <button class="dropbtnnn" onclick="openNav2()"></button>
  <button id="musicopen" class="dropbtnnnn" onclick="openNav3()"></button>
  <button id="micopen" class="dropbtnnnn1" onclick="openNav4()"></button>
  <button id="downopen" class="dropbtnnnn2" onclick="openNav5()"></button>
  <button   class="dropbt3" onclick="walid1()"></button>
   <button id="musiclose" class="dropbt4" onclick="walid2()"></button>
  </div>
  
 <div id="mySidenav3" class="sidenav3">
 </div>
 <div id="mySidenav"  class="sidenav">
  
<a href="#" onclick="myFunction()">20</a>
<a href="#" onclick="myFunction1()">21</a>
<a href="#" onclick="myFunction2()">22</a>
<a href="#" onclick="myFunction3()">23</a>
<a href="#" onclick="myFunction4()">24</a>
<a href="#" onclick="myFunction5()">25</a>
<a href="#" onclick="myFunction6()">26</a>
<a href="#" onclick="myFunction7()">27</a>
<a href="#" onclick="myFunction8()">28</a>
<a href="#" onclick="myFunction9()">29</a>
<a href="#" onclick="myFunction10()">30</a>
<a href="#" onclick="myFunction11()">31</a>
<a href="#" onclick="myFunction12()">32</a>
<a href="#" onclick="myFunction13()">33</a>
<a href="#" onclick="myFunction14()">34</a>
<a href="#" onclick="myFunction15()">35</a>
<a href="#" onclick="myFunction16()">36</a>
<a href="#" onclick="myFunction17()">37</a>
<a href="#" onclick="myFunction18()">38</a>
<a href="#" onclick="myFunction19()">39</a>
<a href="#" onclick="myFunction20()">40</a>
<a href="#" onclick="myFunction21()">41</a>
<a href="#" onclick="myFunction22()">42</a>
<a href="#" onclick="myFunction23()">43</a> 
<a href="#" onclick="myFunction23()"></a> 
<a href="#" onclick="myFunction23()"></a>

</div>
 <div id="mySidenav10"  class="sidenav">

<a class="lisitta" href="#" onclick="doorfun1()">الْمُقَدِّمَةُ</a>
<a class="lisitta" href="#" onclick="doorfun2()">أَحْكَامُ النُّونِ السَّاكِنَةِ وَالتَّنْوينِ</a>
<a class="lisitta" href="#" onclick="doorfun3()">أَحْكَامُ الْمِيمِ وَالنُّونِ الْمُشَدَّدَتَيْنِ</a>
<a class="lisitta" href="#" onclick="doorfun4()">أَحْكَامُ الْمِيمِ السَّاكِنَةِ</a>
<a class="lisitta" href="#" onclick="doorfun5()">حُكْمُ لاَمِ (أَلْ) وَلاَمِ الْفِعْلِ</a>
<a class="lisitta" href="#" onclick="doorfun6()">فِي الْمِثْلَيْنِ وَالْمُتَقَارِبَيْنِ وَالْمُتَجَانِسَيْنِ</a>
<a class="lisitta" href="#" onclick="doorfun7()">أَقْسَامُ المَدِّ</a>
<a class="lisitta" href="#" onclick="doorfun8()">أَحْكَامُ الْمَدِّ</a>
<a class="lisitta" href="#" onclick="doorfun9()">أَقْسَامُ المَدِّ اللَّازِمِ</a>
<a class="lisitta" href="#" onclick="doorfun10()">خَاتِمَةٌ</a>
<a class="lisitta" href="#" onclick="doorfun11()">الْمَتْنُ كُلُّهُ</a>
<a href="#" ></a> 
<a href="#" ></a>

</div>
 <div id="mySidenav1" class="sidenav1">
  <a Class="bk1" href="#" onclick="myFun()"></a>
  <a Class="bk2" href="#" onclick="myFun1()"></a>
  <a Class="bk3" href="#" onclick="myFun2()"></a>
 
</div> 
 <div id="mySidenav2" class="sidenav2">
  <a  href="#" onclick="my0()">105</a>
  <a  href="#" onclick="my1()">110</a>
  <a  href="#" onclick="my2()">115</a> 
  <a  href="#" onclick="my3()">120</a> 
  <a  href="#" onclick="my4()">125</a>
  <a  href="#" onclick="my5()">130</a>
  <a  href="#" onclick="my6()">135</a>
  <a  href="#" onclick="my7()">140</a>
  <a href="#"  onclick="my8()">145</a>
  <a href="#"  onclick="my9()">150</a>
  <a href="#"  onclick="my10()">155</a>
  <a href="#"  onclick="my11()">160</a>
  <a href="#"  onclick="my12()">165</a>
  <a href="#"  onclick="my13()">170</a>
  <a href="#"  onclick="my13()"></a>
  <a href="#"  onclick="my13()"></a>
  
</div> 

 <div id="mySidenavv" class="sidenavv">
       
		
</div>
<div id="mySidenav5" class="sidenav5">
     <div class="inputfile">
<audio style="font-weight: bold;" id="passage-audio" class="passage" controls="" <source src="tohfa.mp3" type="audio/mpeg"></audio> 
		</div>
</div>
<div id="mySidenav6" class="sidenav6">
      <input class="input1" type="file" id="input"/>
<audio style="font-weight: bold;" id="passage-audio1" class="passage1" controls=""></audio> 
		
</div>
<div id="mySidenav7" class="sidenav7">

<a class="clicktest" target="popup" href="https://archive.org/details/haiya_201811" >حمل الملف الصوتي</a>
<a class="clicktest1" target="popup" href="https://drive.google.com/file/d/1dT8l1I1hzql_emMhLFWwG6TQagm87hmm/view?usp=sharing" >حمل ملف الوورد</a>
  </div>
<div  id="myDIV" class="dodo">
<button class="accordion1" onclick="funfun()" ><strong>اِخْتِبَارُ حِفْظِ الْمَتْنِ</strong></button>
<div  id="panal0" class="panel1">
<button  class="clicktest" onclick="opentest()">اِضْغَطْ هُنَا لِإِكْمَالِ الشَّطْرِ</button>
<div id="demo" class="showntest" style="text-align:center">الشطر يظهر هنا</div> 

</div>
<button class="accordion"><strong>التَّعْلِيمَاتُ</strong></button>
<div  id="panal" class="panel">
<section id="d0" class="amiri">
<div onclick="boob()"style="text-align:center"><strong><span style="color: red;">التَّعْلِيمَاتُ</span></strong></div>
<div style="text-align :justify">&nbsp;مرحبا  بك أخي الكريم في نسخة html التي تتيح لك مميزات غير النسخة الثانية ومنها:<br><span style="color: red">&nbsp;أولا:</span>&nbsp;كما ترى أن صدر البيت في الجهة اليمنى، و عجز البيت في الجهة اليسرى.<br><span style="color: red">&nbsp;ثانيا:</span>&nbsp;لرؤية المتن أو النظم يرجى الضغط على الأزرار التي تشير لكل باب.<br><span style="color: red">&nbsp;ثالثا:</span>&nbsp;لتسهيل مشاركة المتن أو أي جزء منه يرجى الضغط مطولا على الشاشة حتى يتاح لك المشاركة أو النسخ كما تريد.<br><span style="color: red">&nbsp;رابعا:</span>&nbsp;بالنسبة للمنظومات يمكنك مشاركة أو نسخ كل بيت لوحده وذلك بالضغط على رقم الباب و منه ترى أن البيت جاهز للمشاركة أو النسخ.<br><span style="color: red">&nbsp;خامسا:</span>&nbsp;يمكنك مشاركة المتن كله إن كان من دون أبواب أو إن كان مبوبا وذلك بالضغط على الباب نفسه أعلى النظم حتى ترى الباب كله أو المتن جاهز للنسخ أو المشاركة.<br><span style="color: red">&nbsp;سادسا:</span>&nbsp;إذا رأيت أي خطأ في الكتابة أو الشكل في المتن أو النظم و ترى أنه خطأ يرجى مراسلتنا عبر البريد الإلكتروني:<a href="mailto:oualid909@gmail.com?Subject=حول%20التطبيق" target="_top">اِضْغَطْ لِمُرَاسَلَتِنَا</a></div>
<div style="text-align:justify"><span style="color: red">&nbsp;سابعا:</span>&nbsp;يمكنك سماع المتن و ذلك في القراءة الصوتية حيث أنك تضغط على أي شطر مرتين حتى يتاح لك البدء من ذلك الشطر و يمكنك التحكم في الصوت بالضغط على زر النوتة في أعلى التطبيق.</div>
<div style="text-align:justify">&nbsp;<span style="color: red">ثامنا:&nbsp;</span>يمكنك أن تحمل ملفا صوتا من جهازك وذلك بالضغط على زر المسجل حتى يتاح لك رفع الملف و الاستماع إليه.</div>
<div style="text-align:justify"><span style="color: red">&nbsp;تاسعا:</span>&nbsp;يمكنك اختبار حفظك للمتن أو النظم بالضغط على زر اختبار الحفظ و منه تفتح لك نافذة جديدة و بالضغط على زر الرجوع للصفحة الرئيسية. ولاختبار حفظك للمتن يرجى الضغط على زر إظهار الشطر و منه يمكنك إظهار الشطر الذي يليه بالضغط تحته حتى يظهر لك الشطر باللون الأسود بدل الشفاف.</div>
</section>
</div>
<button class="accordion"><strong>تُحْفَةُ الْأَطْفَالِ وَ الْغِلْمَانِ</strong></button>
<div  id="panal1" class="panel1">
<button  class="clicktest" onclick="opendoor()">اِخْتَرِ الْبَابَ مِنْ هُنَا</button>
<section id="d" class="amiri">
<div onclick="boob()"style="text-align:center"><strong><span style="color: red;cursor: pointer;">تُحْفَةُ الْأَطْفَالِ وَ الْغِلْمَانِ</span></strong></div>
<div style="text-align:right">&nbsp;قَالَ الشَّيْخُ سُلَيْمَانُ الْجَمْزُورِيُّ رَحِمَهُ اللَّهُ</div>
<div class= "boy1" id="baya1">
<div onclick="boob1()"style="text-align:center"><strong><span style="color: red;cursor: pointer;">الْمُقَدِّمَةُ</span></strong></div>
<div id="bay1">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo1()">1-&nbsp;&nbsp;</span>يَقُـــــولُ رَاجِــــــي رَحْمَــــــةِ الْغَفُـــــــورِ</div>
<div style="text-align: left">دَوْمًـــا سُلَيْمَـــــانُ هُــــوَ الْجَمْـــــزُورِي</div>
</div>
<div id="bay2">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo2()">2-&nbsp;&nbsp;</span>الْحَمْــــــدُ لِلَّــــــــهِ مُصَلِّيًـــــــا عَـــــــــلَى</div>
<div style="text-align: left">مُحَمَّـــــــدٍ وَآلِــــــــهِ وَمَــــــــنْ تَـــــــــــلَا</div>
</div>
<div id="bay3">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo3()">3-&nbsp;&nbsp;</span>وَبَعْـــــــدُ هَـــــــذَا النَّظْـــــــمُ لِلْمُرِيـــــــدِ</div>
<div style="text-align: left">فِـــي النُّـــــونِ وَالتَّنْوِيــــــنِ وَالْمُــــــدُودِ</div>
</div>
<div id="bay4">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo4()">4-&nbsp;&nbsp;</span>سَمَّيْتُــــــــــهُ بِتُحْفَــــــــــــةِ الْأَطْفَـــــــــالِ</div>
<div style="text-align: left">عَـنْ شَيْخِنَـــــا الْمَيْهِــــيِّ ذِي الْكَمَــــالِ</div>
</div>
<div id="bay5">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo5()">5-&nbsp;&nbsp;</span>أَرْجُــــــو بِـــــهِ أَنْ يَنفَــــــــعَ الطُّلَّابَــــــــا</div>
<div style="text-align: left">وَالْأَجْـــــــرَ وَالْقَبُـــــــــولَ وَالثَّوَابَــــــــــا</div>
</div>
</div>
<div class= "boy1" id="baya2">
<div onclick="boob2()"style="text-align:center"><strong><span style="color: red;cursor: pointer;">أَحْكَامُ النُّونِ السَّاكِنَةِ وَالتَّنْوينِ</span></strong></div>
<div id="bay6">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo6()">6-&nbsp;&nbsp;</span>لِلنُّـــــــونِ إِنْ تَسْكُــــــــنْ وَلِلتَّنْوِيـــــــنِ</div>
<div style="text-align: left">أَرْبَـــــعُ أَحْكَـــــــامٍ فَخُـــــــذْ تَبْيِيْنِــــــــي</div>
</div>
<div id="bay7">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo7()">7-&nbsp;&nbsp;</span>فَــــــالأَوَّلُ الْإِظْهَـــــارُ قَبْـــــلَ أَحْــــرُفِ</div>
<div style="text-align: left">لِلْحَلْــــــقِ سِــــتٌّ رُتِّبَـــــتْ فَلْتَعْــــــرِفِ</div>
</div>
<div id="bay8">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo8()">8-&nbsp;&nbsp;</span>هَمْــــــزٌ فَهَـــــــاءٌ ثُــــمَّ عَيْــــــنٌ حَــــــاءُ</div>
<div style="text-align: left">مُهْمَلَتَــــــــانِ ثُــــــــمَّ غَيْـــــــنٌ خَـــــــــاءُ</div>
</div>
<div id="bay9">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo9()">9-&nbsp;&nbsp;</span>وَالثَّـــــانِ إِدْغَـــــــامٌ بِسِتَّــــــــةٍ أَتَـــــــــتْ</div>
<div style="text-align: left">فِـي يَرْمَلُـــــونَ عِنْدَهُـــــــمْ قَـدْ ثَبَتَــــــتْ</div>
</div>
<div id="bay10">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo10()">10-&nbsp;</span>لَــٰكِنَّهَـــــا قِسْمَـــــانِ قِسْــــــمٌ يُدْغَمَــــــا</div>
<div style="text-align: left">فِيـــــــهِ بِغُنَّـــــــــةٍ بِـ:يَنْمُــــــــو عُلِمَـــــــــا</div>
</div>
<div id="bay11">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo11()">11-&nbsp;</span>إِلَّا إِذَا كَانَـــــــــــا بِكِلْمَــــــــــــةٍ فَـــــــــلَا</div>
<div style="text-align: left">تُدْغِـــــمْ كـَ:دُنْيَـــــا ثُـــمَّ صِنْــــوَانٌ تَــــلَا</div>
</div>
<div id="bay12">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo12()">12-&nbsp;</span>وَالثَّـــــــانِ إِدْغَــــــــامٌ بِغَيْــــــــرِ غُنَّــــــــهْ</div>
<div style="text-align: left">فِــــــي الـلَّامِ وَالــرَّا ثُــــــــــمَّ كَرِّرَنَّــــــــهْ</div>
</div>
<div id="bay13">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo13()">13-&nbsp;</span>وَالثَّالِــــــثُ الْإِقْــلَابُ عِنْــــــــدَ الْبَــــــاءِ</div>
<div style="text-align: left">مِيمًــــــــــا بِغُنَّــــــــــــةٍ مَـــعَ الْإِخْفَـــــــاءِ</div>
</div>
<div id="bay14">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo14()">14-&nbsp;</span>وَالرَّابِــــعُ الْإِخْفَــــاءُ عِنْــــــدَ الْفَاضِــــلِ</div>
<div style="text-align: left">مِـــنَ الْحُــــرُوفِ وَاجِــــــبٌ لِلْفَاضِــــلِ</div>
</div>
<div id="bay15">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo15()">15-&nbsp;</span>فِـــي خَمْسَــــةٍ مِنْ بَعْــــدِ عَشْـــرٍ رَمْزُهَا</div>
<div style="text-align: left">فِــي كِلْـــمِ هَـذَا البَيْـــتِ قَـــدْ ضَمَّنْتُهَـــا</div>
</div>
<div id="bay16">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo16()">16-&nbsp;</span>صِفْ ذَا ثَنَا كَـمْ جَادَ شَخْـصٌ قَدْ سَمَـا</div>
<div style="text-align: left">دُمْ طَيِّبــًا زِدْ فِـــي تُقًـــى ضَـــعْ ظَالِمَــــا</div>
</div>
</div>
<div class= "boy1" id="baya3">
<div onclick="boob3()"style="text-align:center"><strong><span style="color: red;cursor: pointer;">أَحْكَامُ الْمِيمِ وَالنُّونِ الْمُشَدَّدَتَيْنِ</span></strong></div>
<div id="bay17">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo17()">17-&nbsp;</span>وَغُــــنَّ مِيمًـــــا ثُــــمَّ نُونًــــــــا شُــــــدِّدَا</div>
<div style="text-align: left">وَسَـــــمِّ كُــــلًّا حَـــــرْفَ غُنَّــــــةٍ بَــــــدَا</div>
</div>
</div>
<div class= "boy1" id="baya4">
<div onclick="boob4()"style="text-align:center"><strong><span style="color: red;cursor: pointer;">أَحْكَامُ الْمِيمِ السَّاكِنَةِ</span></strong></div>
<div id="bay18">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo18()">18-&nbsp;</span>وَالْمِيـــمُ إِنْ تَسْكُــنْ تَجِــي قَبْلَ الْهِجَـا</div>
<div style="text-align: left">لَا أَلِـــــــفٍ لَيِّنَــــــــةٍ لِـــذِي الْحِجَـــــــــا</div>
</div>
<div id="bay19">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo19()">19-&nbsp;</span>أَحْكَـــامُهَـــــا ثَلَاثَـــــــةٌ لِمَـــــنْ ضَبَــــطْ</div>
<div style="text-align: left">إِخْفَــــــاءٌ اِدْغَــــــامٌ وَإِظْهَـــــــارٌ فَقَــــــطْ</div>
</div>
<div id="bay20">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo20()">20-&nbsp;</span>فَـــالْأَوَّلُ الْإِخْفَــــــــاءُ عِنْــــــــدَ الْبَــــــاءِ</div>
<div style="text-align: left">وَسَمِّــــــــهِ الشَّفْـــــــــــوِيَّ لِلْقُــــــــــــرَّاءِ</div>
</div>
<div id="bay21">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo21()">21-&nbsp;</span>وَالثَّـــــانِ إِدْغَـــــــامٌ بِمِثْلِهَــــــــا أَتَـــــــى</div>
<div style="text-align: left">وَسَــــــمِّ إِدْغَـــــامًــا صَغِيــــرًا يَــا فَتَـــى</div>
</div>
<div id="bay22">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo22()">22-&nbsp;</span>وَالثَّالِـــــثُ الْإِظْهَـــــــارُ فِــــي الْبَقِيَّــــــهْ</div>
<div style="text-align: left">مِـــــنْ أَحْـــــرُفٍ وَسَمِّهَـــــــا شَفْوِيَّــــــهْ</div>
</div>
<div id="bay23">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo23()">23-&nbsp;</span>وَاحْـــذَرْ لَــدَى وَاوٍ وَفَــــا أَنْ تَخْتَفِــــي</div>
<div style="text-align: left">لِقُرْبِهَــــــــا وَالِاتِّحَـــــــــــادِ فَاعْــــــــرِفِ</div>
</div>
</div>
<div class= "boy1" id="baya5">
<div onclick="boob5()"style="text-align:center"><strong><span style="color: red;cursor: pointer;">حُكْمُ لاَمِ (أَلْ) وَلاَمِ الْفِعْلِ</span></strong></div>
<div id="bay24">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo24()">24-&nbsp;</span>لِلَامِ أَلْ حَــــــالَانِ قَبْـــــــلَ الْأَحْـــــرُفِ</div>
<div style="text-align: left">أُولَاهُــمَـــــا إِظْهَـــــارُهَــــــا فَلْتَعْـــــرِفِ</div>
</div>
<div id="bay25">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo25()">25-&nbsp;</span>قَبْـــلَ ارْبَـــعٍ مَــعْ عَشْـــرَةٍ خُــذْ عِلْمَــــهُ</div>
<div style="text-align: left">مِـنْ إِبْـــــغِ حَجَّــــكَ وَخَــــفْ عَقِيمَــــهُ</div>
</div>
<div id="bay26">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo26()">26-&nbsp;</span>ثَانِيهِمَـــــــا إِدْغَامُهَــــــــا فِـــــي أَرْبَـــــــعِ</div>
<div style="text-align: left">وَعَشْـــــرَةٍ أَيْضًـــــــا وَرَمْزَهَـــــــــا فَـــــعِ</div>
</div>
<div id="bay27">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo27()">27-&nbsp;</span>طِبْ ثُمَّ صِـلْ رَحِمًـا تَفُزْ ضِفْ ذَا نِعَـمْ</div>
<div style="text-align: left">دَعْ سُـــــوءَ ظَنٍّ زُرْ شَرِيفًــــــا لِلْكَـــــرَمْ</div>
</div>
<div id="bay28">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo28()">28-&nbsp;</span>وَالــــلَّامَ الُاولَـــــى سَمِّهَـــــــا قَمْرِيَّــــــهْ</div>
<div style="text-align: left">وَالــــلَّامَ الُاخْـــرَى سَمِّهَــــــا شَمْسِيَّــــهْ</div>
</div>
<div id="bay29">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo29()">29-&nbsp;</span>وَأَظْهِـــــــــرَنَّ لاَمَ فِعْـــــــــــلٍ مُطْلَقَـــــــا</div>
<div style="text-align: left">فِــي نَحْــــوِ قُـلْ نَعَــــمْ وَقُلْنَــــا وَالْتَقَـى</div>
</div>
</div>
<div class= "boy1" id="baya6">
<div onclick="boob6()"style="text-align:center"><strong><span style="color: red;cursor: pointer;">فِي الْمِثْلَيْنِ وَالْمُتَقَارِبَيْنِ وَالْمُتَجَانِسَيْنِ</span></strong></div>
<div id="bay30">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo30()">30-&nbsp;</span>إِنْ فِـي الصِّفَـــاتِ وَالْمَخَــــارِجِ اتَّفَـــقْ</div>
<div style="text-align: left">حَرْفَــــانِ فَالْمِثْـــــلَانِ فِيهِمَــــا أَحَـــــــقْ</div>
</div>
<div id="bay31">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo31()">31-&nbsp;</span>وَإِنْ يَكُــــونَـــــا مَخْرَجًــــــــا تَقَارَبَـــــــــا</div>
<div style="text-align: left">وَفِـــــي الصِّفَـــــــاتِ اخْتَلَفَــــــا يُلَقَّبَـــــا</div>
</div>
<div id="bay32">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo32()">32-&nbsp;</span>مُتْقَـــــارِبَيْــــــنِ أَوْ يَكُونَـــــــــا اتَّفَقَـــــــــا</div>
<div style="text-align: left">فِـــي مَخْـــرَجٍ دُونَ الصِّفَـــاتِ حُقِّقَـــــا</div>
</div>
<div id="bay33">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo33()">33-&nbsp;</span>بِالْمُتَجَـــــــانِسَيْــــنِ ثُــــــمَّ إِنْ سَكَـــــــنْ</div>
<div style="text-align: left">أَوَّلُ كُـــــــــلٍّ فَالصَّغِيــــــــرَ سَمِّيَــــــــــنْ</div>
</div>
<div id="bay34">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo34()">34-&nbsp;</span>أَوْ حُـــرِّكَ الْحَرْفَـــــانِ فِي كُــــلٍّ فَقُــــلْ</div>
<div style="text-align: left">كُــــلٌّ كَبِيــــــرٌ وَافْهَمَنْــــــــــهُ بِالْمُثُـــــــلْ</div>
</div>
</div>
<div class= "boy1" id="baya7">
<div onclick="boob7()"style="text-align:center"><strong><span style="color: red;cursor: pointer;">أَقْسَامُ المَدِّ</span></strong></div>
<div id="bay35">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo35()">35-&nbsp;</span>وَالْمَــــــدُّ أَصْلِـــــــيٌّ وَفَرْعِــــــــيٌّ لَـــــــهُ</div>
<div style="text-align: left">وَسَـــــــــمِّ أَوَّلًا طَبِيعِيًّــــــــــا وَهُـــــــــــو</div>
</div>
<div id="bay36">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo36()">36-&nbsp;</span>مَــــا لَا تَوَقُّــــــفٌ لَــــــهُ عَـلَى سَبَــــــبْ</div>
<div style="text-align: left">وَلَا بِدُونِــــــــهِ الْحُـــــرُوفُ تُجْتَلَـــــــبْ</div>
</div>
<div id="bay37">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo37()">37-&nbsp;</span>بَــلْ أَيُّ حَــرْفٍ غَيْـــرِ هَمْــزٍ أَوْ سُكُونْ</div>
<div style="text-align: left">جَــــا بَعْــــدَ مَـــدٍّ فَالطَّبِيعِـــــيَّ يَكُـــــونْ</div>
</div>
<div id="bay38">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo38()">38-&nbsp;</span>وَالْآخَــــرُ الْفَرْعِــــيُّ مَوْقُــــوفٌ عَـــــلَى</div>
<div style="text-align: left">سَبَـــــبْ كَهَمْـــــزٍ أَوْ سُكُــــونٍ مُسْجَـلَا</div>
</div>
<div id="bay39">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo39()">39-&nbsp;</span>حُــــــرُوفُـــــــــهُ ثَلَاثَـــــــــــةٌ فَعِيــهَـــــــــا</div>
<div style="text-align: left">فِـــي لَفْـــظِ وَايٍ وَهْـــيَ فِــي نُوحِيهَــــا</div>
</div>
<div id="bay40">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo40()">40-&nbsp;</span>وَالكَسْــــرُ قَبْـــلَ الْيَـــا وَقَبْـلَ الْوَاوِ ضَمْ</div>
<div style="text-align: left">شَـــرْطٌ وَفَتْــــحٌ قَبْــــلَ أَلْـــــفٍ يُلْتَـــــزَمْ</div>
</div>
<div id="bay41">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo41()">41-&nbsp;</span>وَاللِّيـــــنُ مِنْهَـــــا الْيَـــــا وَوَاوٌ سُكِّنَـــــــا</div>
<div style="text-align: left">إِنِ انْفِتَــــــــاحٌ قَبْـــــــلَ كُـــــــلٍّ أُعْلِنَــــــا</div>
</div>
</div>
<div class= "boy1" id="baya8">
<div onclick="boob8()"style="text-align:center"><strong><span style="color: red;cursor: pointer;">أَحْكَامُ الْمَدِّ</span></strong></div>
<div id="bay42">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo42()">42-&nbsp;</span>لِلْمَــــــدِّ أَحْكَـــــــامٌ ثَلَاثَـــــــــةٌ تَــــــدُومْ</div>
<div style="text-align: left">وَهْــــيَ الْوُجُــــوبُ وَالْجَــوَازُ وَاللُّـزُومْ</div>
</div>
<div id="bay43">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo43()">43-&nbsp;</span>فَوَاجِـــــبٌ إِنْ جَــــاءَ هَمْـــــزٌ بَعْــدَ مَــدْ</div>
<div style="text-align: left">فِـــــي كِلْمَـــــــةٍ وَذَا بِمُتَّصِـــــــلْ يُعَــــــدْ</div>
</div>
<div id="bay44">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo44()">44-&nbsp;</span>وَجَــــــائِـزٌ مَــــدٌّ وَقَصْــــــرٌ إِنْ فُصِــــــلْ</div>
<div style="text-align: left">كُــــــلٌّ بِكِلْمَـــــــــةٍ وَهَــذَا الْمُنْفَصِــــــلْ</div>
</div>
<div id="bay45">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo45()">45-&nbsp;</span>وَمِثْــــــلُ ذَا إِنْ عَـــــــرَضَ السُّكُـــــــونُ</div>
<div style="text-align: left">وَقْفًـــــــــا كَــتَعْلَمُــــــــــونَ نَسْتَعِيـــــــــنُ</div>
</div>
<div id="bay46">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo46()">46-&nbsp;</span>أَوْ قُــــدِّمَ الْهَمْـــــــزُ عَـــــلَى الْمَــــدِّ وَذَا</div>
<div style="text-align: left">بَــــــدَلْ كَــآمَنُـــــــوا وَإِيمَانًـــــــــا خُـــــذَا</div>
</div>
<div id="bay47">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo47()">47-&nbsp;</span>وَلَازِمٌ إِنِ السُّــكُــــــــــــونُ أُصِّـــــــــــــلَا</div>
<div style="text-align: left">وَصْـــــلًا وَوَقْفًـــــا بَعْـــدَ مَـــدٍّ طُــــــوِّلَا</div>
</div>
</div>
<div class= "boy1" id="baya9">
<div onclick="boob9()"style="text-align:center"><strong><span style="color: red;cursor: pointer;">أَقْسَامُ المَدِّ اللَّازِمِ</span></strong></div>
<div id="bay48">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo48()">48-&nbsp;</span>أَقْسَــــــــــامُ لَازِمٍ لَــدَيْهِـــــــــمْ أَرْبَعَـــــــهْ</div>
<div style="text-align: left">وَتِلْـــــــكَ كِلْمِــــــيٌّ وَحَرْفِـــــــيٌّ مَعَــــهْ</div>
</div>
<div id="bay49">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo49()">49-&nbsp;</span>كِـــــلَاهُمَـــــــــا مُخَفَّـــــــــفٌ مُثَقَّـــــــــلُ</div>
<div style="text-align: left">فَــــــــــهَذِهِ أَرْبَعَــــــــــــــةٌ تُـفَـصَّــــــــــــلُ</div>
</div>
<div id="bay50">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo50()">50-&nbsp;</span>فَــــإِنْ بِكِلْمَــــــــةٍ سُكُــــــونٌ اجْتَمَـــــــعْ</div>
<div style="text-align: left">مَـــعْ حَــرْفِ مَـدٍّ فَهْـــــوَ كِلْمِـــيٌّ وَقَـــعْ</div>
</div>
<div id="bay51">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo51()">51-&nbsp;</span>أَوْ فِـــــي ثُلَاثِـــــيِّ الْحُـــــرُوفِ وُجِـــدَا</div>
<div style="text-align: left">وَالْمَـــــدُّ وَسْطُـــــــهُ فَحَرْفِــــــــيٌّ بَــــــدَا</div>
</div>
<div id="bay52">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo52()">52-&nbsp;</span>كِــلَاهُــمَـــــــا مُثَقَّـــــــلٌ إِنْ أُدْغِمَـــــــــــا</div>
<div style="text-align: left">مَخَفَّــــــــفٌ كُـــــلٌّ إِذَا لَـــــمْ يُدْغَمَـــــــا</div>
</div>
<div id="bay53">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo53()">53-&nbsp;</span>وَالـــلَّازِمُ الْحَرْفِـــــــــيُّ أَوَّلَ السُّــــــــوَرْ</div>
<div style="text-align: left">وُجُــــــودُهُ وَفِــــي ثَمَــــــانٍ انْحَصَـــــــرْ</div>
</div>
<div id="bay54">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo54()">54-&nbsp;</span>يَجْمَعُهَــــا حُـــرُوفُ كَــمْ عَسَــلْ نَقَصْ</div>
<div style="text-align: left">وَعَيْـــنُ ذُو وَجْهَيْــــنِ والطُّــولُ أَخَـصْ</div>
</div>
<div id="bay55">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo55()">55-&nbsp;</span>وَمَــا سِــوَى الحَــرْفِ الثُّلَاثِــي لَا أَلِفْ</div>
<div style="text-align: left">فَــــــــمَدُّهُ مَـــــــدٌّ طَبِيعِـــــــــيٌّ أُلِــــــــفْ</div>
</div>
<div id="bay56">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo56()">56-&nbsp;</span>وَذَاكَ أَيْضًـــــا فِـــي فَوَاتِــــــحِ السُّـــــوَرْ</div>
<div style="text-align: left">فِـــي لَفْـــظِ حَــيٌّ طَاهِـــرٌ قَـدِ انْحَصَــــرْ</div>
</div>
<div id="bay57">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo57()">57-&nbsp;</span>وَيَجْمَــــعُ الْفَوَاتِــــــحَ الْأَرْبَـــــعْ عَشَــــرْ</div>
<div style="text-align: left">صِلْــــهُ سُحَيْـــرًا مَنْ قَطَعْـــكَ ذَا اشْتَهَرْ</div>
</div>
</div>
<div class= "boy1" id="baya10">
<div onclick="boob10()"style="text-align:center"><strong><span style="color: red;cursor: pointer;">خَاتِمَةٌ</span></strong></div>
<div id="bay58">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo58()">58-&nbsp;</span>وَتَـــــــمَّ ذَا النَّظْــــــــــمُ بِحَمْــــــــــدِ اللَّهِ</div>
<div style="text-align: left">عَـــــــلَى تَمَامِـــــــــهِ بِــــــلَا تَنَاهِــــــــــي</div>
</div>
<div id="bay59">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo59()">59-&nbsp;</span>أَبْيَـــــاتُـــهُ نَـــــدٌّ بَــــــدَا لِـــذِي النُّهَــــــى</div>
<div style="text-align: left">تَــارِيخُــــــهَا بُشْــــــرَى لِمَـــــنْ يُتْقِنُهَــــا</div>
</div>
<div id="bay60">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo60()">60-&nbsp;</span>ثُــــــمَّ الصَّــــــــلَاةُ وَالسَّــــــلَامُ أَبَـــــــدَا</div>
<div style="text-align: left">عَــــــلَى خِتَـــــــامِ الْأَنْبِيَــــــاءِ أَحْمَــــــدَا</div>
</div>
<div id="bay61">
<div style="text-align: right"><span style="color: red;cursor: pointer;"onclick="bo61()">61-&nbsp;</span>وَالْآلِ وَالصَّــــــحْبِ وَكُـــــــلِّ تَابِــــــــعِ</div>
<div style="text-align: left">وَكُـــــــلِّ قَــــــــارِئٍ وَكُـــــــلِّ سَامِـــــــعِ</div>
</div>
</div>

</section>
</div>
<button class="accordion"><strong>القِرَاءَةُ الصَّوْتِيَّةُ</strong></button>
<div  id="panal2" class="panel">


&nbsp;<input id="playback-rate" min="0.8" max="1.0" value="1.0" step="0.1" disabled="disabled" hidden="" onchange='this.nextElementSibling.textContent = String(Math.round(this.valueAsNumber * 10) / 10) + "\u00D7";' type="range">&nbsp;
<p class="autofocus-current-word" hidden=""><input id="autofocus-current-word" checked="checked" type="checkbox">
<noscript><p
class="error"><em><strong>Notice:</strong> You
need to have JavaScript enabled and available to try this free HTML5
audio read-along story.</em></p> </noscript>
</p>
<footer class="credits"> </footer>
<div id="passage-text" class="passage">
<h3 style="text-align: center;" class="section-heading">247
Section Heading Starts</h3>


<div style="text-align: right"><span style="color: red;">1-&nbsp;&nbsp;</span><span data-begin="0.145" data-dur="2.897">يَقُـــــولُ رَاجِــــــي رَحْمَــــــةِ الْغَفُـــــــورِ</span></div>
<div style="text-align: left"><span data-begin="3.259" data-dur="3.476">دَوْمًـــا سُلَيْمَـــــانُ هُــــوَ الْجَمْـــــزُورِي</span></div>
<div style="text-align: right"><span style="color: red;">2-&nbsp;&nbsp;</span><span data-begin="6.856" data-dur="3.138">الْحَمْــــــدُ لِلَّــــــــهِ مُصَلِّيًـــــــا عَـــــــــلَى</span></div>
<div style="text-align: left"><span data-begin="10.091" data-dur="3.211">مُحَمَّـــــــدٍ وَآلِــــــــهِ وَمَــــــــنْ تَـــــــــــلَا</span></div>
<div style="text-align: right"><span style="color: red;">3-&nbsp;&nbsp;</span><span data-begin="13.543" data-dur="3.283">وَبَعْـــــــدُ هَـــــــذَا النَّظْـــــــمُ لِلْمُرِيـــــــدِ</span></div>
<div style="text-align: left"><span data-begin="17.140" data-dur="3.211">فِـــي النُّـــــونِ وَالتَّنْوِيــــــنِ وَالْمُــــــدُودِ</span></div>
<div style="text-align: right"><span style="color: red;">4-&nbsp;&nbsp;</span><span data-begin="20.544" data-dur="3.380">سَمَّيْتُــــــــــهُ بِتُحْفَــــــــــــةِ الْأَطْفَـــــــــالِ</span></div>
<div style="text-align: left"><span data-begin="24.020" data-dur="3.404">عَـنْ شَيْخِنَـــــا الْمَيْهِــــيِّ ذِي الْكَمَــــالِ</span></div>
<div style="text-align: right"><span style="color: red;">5-&nbsp;&nbsp;</span><span data-begin="27.665" data-dur="3.500">أَرْجُــــــو بِـــــهِ أَنْ يَنفَــــــــعَ الطُّلَّابَــــــــا</span></div>
<div style="text-align: left"><span data-begin="31.335" data-dur="2.921">وَالْأَجْـــــــرَ وَالْقَبُـــــــــولَ وَالثَّوَابَــــــــــا</span></div>
<div style="text-align: center;display: block"><strong><span data-begin="34.835" data-dur="2.897" style="color: red;">أَحْكَامُ النُّونِ السَّاكِنَةِ وَالتَّنْوينِ</span></strong></div>

<div style="text-align: right"><span style="color: red;">6-&nbsp;&nbsp;</span><span data-begin="38.649" data-dur="3.187">لِلنُّـــــــونِ إِنْ تَسْكُــــــــنْ وَلِلتَّنْوِيـــــــنِ</span></div>
<div style="text-align: left"><span data-begin="41.981" data-dur="3.500">أَرْبَـــــعُ أَحْكَـــــــامٍ فَخُـــــــذْ تَبْيِيْنِــــــــي</span></div>
<div style="text-align: right"><span style="color: red;">7-&nbsp;&nbsp;</span><span data-begin="45.964" data-dur="3.331">فَــــــالأَوَّلُ الْإِظْهَـــــارُ قَبْـــــلَ أَحْــــرُفِ</span></div>
<div style="text-align: left"><span data-begin="49.416" data-dur="3.549">لِلْحَلْــــــقِ سِــــتٌّ رُتِّبَـــــتْ فَلْتَعْــــــرِفِ</span></div>
<div style="text-align: right"><span style="color: red;">8-&nbsp;&nbsp;</span><span data-begin="53.255" data-dur="3.621">هَمْــــــزٌ فَهَـــــــاءٌ ثُــــمَّ عَيْــــــنٌ حَــــــاءُ</span></div>
<div style="text-align: left"><span data-begin="57.189" data-dur="3.452">مُهْمَلَتَــــــــانِ ثُــــــــمَّ غَيْـــــــنٌ خَـــــــــاءُ</span></div>
<div style="text-align: right"><span style="color: red;">9-&nbsp;&nbsp;</span><span data-begin="60.786" data-dur="2.969">وَالثَّـــــانِ إِدْغَـــــــامٌ بِسِتَّــــــــةٍ أَتَـــــــــتْ</span></div>
<div style="text-align: left"><span data-begin="64.214" data-dur="3.114">فِـي يَرْمَلُـــــونَ عِنْدَهُـــــــمْ قَـدْ ثَبَتَــــــتْ</span></div>
<div style="text-align: right"><span style="color: red;">10-&nbsp;</span><span data-begin="67.763" data-dur="3.597">لَــٰكِنَّهَـــــا قِسْمَـــــانِ قِسْــــــمٌ يُدْغَمَــــــا</span></div>
<div style="text-align: left"><span data-begin="71.626" data-dur="3.404">فِيـــــــهِ بِغُنَّـــــــــةٍ بِـ:يَنْمُــــــــو عُلِمَـــــــــا</span></div>
<div style="text-align: right"><span style="color: red;">11-&nbsp;</span><span data-begin="75.223" data-dur="3.597">إِلَّا إِذَا كَانَـــــــــــا بِكِلْمَــــــــــــةٍ فَـــــــــلَا</span></div>
<div style="text-align: left"><span data-begin="78.989" data-dur="3.573">تُدْغِـــــمْ كـَ:دُنْيَـــــا ثُـــمَّ صِنْــــوَانٌ تَــــلَا</span></div>
<div style="text-align: right"><span style="color: red;">12-&nbsp;</span><span data-begin="82.682" data-dur="3.042">وَالثَّـــــــانِ إِدْغَــــــــامٌ بِغَيْــــــــرِ غُنَّــــــــهْ</span></div>
<div style="text-align: left"><span data-begin="86.207" data-dur="3.162">فِــــــي الـلَّامِ وَالــرَّا ثُــــــــــمَّ كَرِّرَنَّــــــــهْ</span></div>
<div style="text-align: right"><span style="color: red;">13-&nbsp;</span><span data-begin="89.610" data-dur="3.452">وَالثَّالِــــــثُ الْإِقْــلَابُ عِنْــــــــدَ الْبَــــــاءِ</span></div>
<div style="text-align: left"><span data-begin="93.183" data-dur="3.404">مِيمًــــــــــا بِغُنَّــــــــــــةٍ مَـــعَ الْإِخْفَـــــــاءِ</span></div>
<div style="text-align: right"><span style="color: red;">14-&nbsp;</span><span data-begin="96.756" data-dur="3.404">وَالرَّابِــــعُ الْإِخْفَــــاءُ عِنْــــــدَ الْفَاضِــــلِ</span></div>
<div style="text-align: left"><span data-begin="100.546" data-dur="3.307">مِـــنَ الْحُــــرُوفِ وَاجِــــــبٌ لِلْفَاضِــــلِ</span></div>
<div style="text-align: right"><span style="color: red;">15-&nbsp;</span><span data-begin="103.878" data-dur="3.452">فِـــي خَمْسَــــةٍ مِنْ بَعْــــدِ عَشْـــرٍ رَمْزُهَا</span></div>
<div style="text-align: left"><span data-begin="107.571" data-dur="3.525">فِــي كِلْـــمِ هَـذَا البَيْـــتِ قَـــدْ ضَمَّنْتُهَـــا</span></div>
<div style="text-align: right"><span style="color: red;">16-&nbsp;</span><span data-begin="111.434" data-dur="3.718">صِفْ ذَا ثَنَا كَـمْ جَادَ شَخْـصٌ قَدْ سَمَـا</span></div>
<div style="text-align: left"><span data-begin="115.465" data-dur="3.718">دُمْ طَيِّبــًا زِدْ فِـــي تُقًـــى ضَـــعْ ظَالِمَــــا</span></div>
<div style="text-align: center"><strong><span data-begin="119.376" data-dur="2.800" style="color: red;">أَحْكَامُ الْمِيمِ وَالنُّونِ الْمُشَدَّدَتَيْنِ</span></strong></div>

<div style="text-align: right"><span style="color: red;">17-&nbsp;</span><span data-begin="122.635" data-dur="3.380">وَغُــــنَّ مِيمًـــــا ثُــــمَّ نُونًــــــــا شُــــــدِّدَا</span></div>
<div style="text-align: left"><span data-begin="126.232" data-dur="2.993">وَسَـــــمِّ كُــــلًّا حَـــــرْفَ غُنَّــــــةٍ بَــــــدَا</span></div>
<div style="text-align: center"><strong><span data-begin="129.757" data-dur="2.124" style="color: red;">أَحْكَامُ الْمِيمِ السَّاكِنَةِ</span></strong></div>

<div style="text-align: right"><span style="color: red;">18-&nbsp;</span><span data-begin="132.653" data-dur="3.428">وَالْمِيـــمُ إِنْ تَسْكُــنْ تَجِــي قَبْلَ الْهِجَـا</span></div>
<div style="text-align: left"><span data-begin="136.130" data-dur="3.162">لَا أَلِـــــــفٍ لَيِّنَــــــــةٍ لِـــذِي الْحِجَـــــــــا</span></div>
<div style="text-align: right"><span style="color: red;">19-&nbsp;</span><span data-begin="139.340" data-dur="3.259">أَحْكَـــامُهَـــــا ثَلَاثَـــــــةٌ لِمَـــــنْ ضَبَــــطْ</span></div>
<div style="text-align: left"><span data-begin="142.672" data-dur="3.404">إِخْفَــــــاءٌ اِدْغَــــــامٌ وَإِظْهَـــــــارٌ فَقَــــــطْ</span></div>
<div style="text-align: right"><span style="color: red;">20-&nbsp;</span><span data-begin="146.221" data-dur="3.331">فَـــالْأَوَّلُ الْإِخْفَــــــــاءُ عِنْــــــــدَ الْبَــــــاءِ</span></div>
<div style="text-align: left"><span data-begin="149.697" data-dur="3.090">وَسَمِّــــــــهِ الشَّفْـــــــــــوِيَّ لِلْقُــــــــــــرَّاءِ</span></div>
<div style="text-align: right"><span style="color: red;">21-&nbsp;</span><span data-begin="152.932" data-dur="3.090">وَالثَّـــــانِ إِدْغَـــــــامٌ بِمِثْلِهَــــــــا أَتَـــــــى</span></div>
<div style="text-align: left"><span data-begin="156.142" data-dur="3.307">وَسَــــــمِّ إِدْغَـــــامًــا صَغِيــــرًا يَــا فَتَـــى</span></div>
<div style="text-align: right"><span style="color: red;">22-&nbsp;</span><span data-begin="159.643" data-dur="3.042">وَالثَّالِـــــثُ الْإِظْهَـــــــارُ فِــــي الْبَقِيَّــــــهْ</span></div>
<div style="text-align: left"><span data-begin="162.974" data-dur="3.066">مِـــــنْ أَحْـــــرُفٍ وَسَمِّهَـــــــا شَفْوِيَّــــــهْ</span></div>
<div style="text-align: right"><span style="color: red;">23-&nbsp;</span><span data-begin="166.354" data-dur="3.452">وَاحْـــذَرْ لَــدَى وَاوٍ وَفَــــا أَنْ تَخْتَفِــــي</span></div>
<div style="text-align: left"><span data-begin="169.975" data-dur="3.138">لِقُرْبِهَــــــــا وَالِاتِّحَـــــــــــادِ فَاعْــــــــرِفِ</span></div>
<div style="text-align: center"><strong><span data-begin="173.862" data-dur="2.631" style="color: red;">حُكْمُ لاَمِ (أَلْ) وَلاَمِ الْفِعْلِ</span></strong></div>

<div style="text-align: right"><span style="color: red;">24-&nbsp;</span><span data-begin="177.145" data-dur="3.356">لِلَامِ أَلْ حَــــــالَانِ قَبْـــــــلَ الْأَحْـــــرُفِ</span></div>
<div style="text-align: left"><span data-begin="180.694" data-dur="3.645">أُولَاهُــمَـــــا إِظْهَـــــارُهَــــــا فَلْتَعْـــــرِفِ</span></div>
<div style="text-align: right"><span style="color: red;">25-&nbsp;</span><span data-begin="184.484" data-dur="3.404">قَبْـــلَ ارْبَـــعٍ مَــعْ عَشْـــرَةٍ خُــذْ عِلْمَــــهُ</span></div>
<div style="text-align: left"><span data-begin="187.984" data-dur="3.283">مِـنْ إِبْـــــغِ حَجَّــــكَ وَخَــــفْ عَقِيمَــــهُ</span></div>
<div style="text-align: right"><span style="color: red;">26-&nbsp;</span><span data-begin="191.412" data-dur="3.428">ثَانِيهِمَـــــــا إِدْغَامُهَــــــــا فِـــــي أَرْبَـــــــعِ</span></div>
<div style="text-align: left"><span data-begin="195.009" data-dur="3.283">وَعَشْـــــرَةٍ أَيْضًـــــــا وَرَمْزَهَـــــــــا فَـــــعِ</span></div>
<div style="text-align: right"><span style="color: red;">27-&nbsp;</span><span data-begin="198.413" data-dur="3.669">طِبْ ثُمَّ صِـلْ رَحِمًـا تَفُزْ ضِفْ ذَا نِعَـمْ</span></div>
<div style="text-align: left"><span data-begin="202.251" data-dur="3.476">دَعْ سُـــــوءَ ظَنٍّ زُرْ شَرِيفًــــــا لِلْكَـــــرَمْ</span></div>
<div style="text-align: right"><span style="color: red;">28-&nbsp;</span><span data-begin="205.872" data-dur="3.259">وَالــــلَّامَ الُاولَـــــى سَمِّهَـــــــا قَمْرِيَّــــــهْ</span></div>
<div style="text-align: left"><span data-begin="209.421" data-dur="3.525">وَالــــلَّامَ الُاخْـــرَى سَمِّهَــــــا شَمْسِيَّــــهْ</span></div>
<div style="text-align: right"><span style="color: red;">29-&nbsp;</span><span data-begin="213.211" data-dur="3.283">وَأَظْهِـــــــــرَنَّ لاَمَ فِعْـــــــــــلٍ مُطْلَقَـــــــا</span></div>
<div style="text-align: left"><span data-begin="216.591" data-dur="3.500">فِــي نَحْــــوِ قُـلْ نَعَــــمْ وَقُلْنَــــا وَالْتَقَـى</span></div>
<div style="text-align: center"><strong><span data-begin="221.057" data-dur="3.597" style="color: red;">فِي الْمِثْلَيْنِ وَالْمُتَقَارِبَيْنِ وَالْمُتَجَانِسَيْنِ</span></strong></div>

<div style="text-align: right"><span style="color: red;">30-&nbsp;</span><span data-begin="225.716" data-dur="2.993">إِنْ فِـي الصِّفَـــاتِ وَالْمَخَــــارِجِ اتَّفَـــقْ</span></div>
<div style="text-align: left"><span data-begin="228.782" data-dur="3.380">حَرْفَــــانِ فَالْمِثْـــــلَانِ فِيهِمَــــا أَحَـــــــقْ</span></div>
<div style="text-align: right"><span style="color: red;">31-&nbsp;</span><span data-begin="232.234" data-dur="3.211">وَإِنْ يَكُــــونَـــــا مَخْرَجًــــــــا تَقَارَبَـــــــــا</span></div>
<div style="text-align: left"><span data-begin="235.541" data-dur="3.452">وَفِـــــي الصِّفَـــــــاتِ اخْتَلَفَــــــا يُلَقَّبَـــــا</span></div>
<div style="text-align: right"><span style="color: red;">32-&nbsp;</span><span data-begin="239.018" data-dur="3.428">مُتْقَـــــارِبَيْــــــنِ أَوْ يَكُونَـــــــــا اتَّفَقَـــــــــا</span></div>
<div style="text-align: left"><span data-begin="242.542" data-dur="3.235">فِـــي مَخْـــرَجٍ دُونَ الصِّفَـــاتِ حُقِّقَـــــا</span></div>
<div style="text-align: right"><span style="color: red;">33-&nbsp;</span><span data-begin="245.946" data-dur="3.114">بِالْمُتَجَـــــــانِسَيْــــنِ ثُــــــمَّ إِنْ سَكَـــــــنْ</span></div>
<div style="text-align: left"><span data-begin="249.109" data-dur="3.235">أَوَّلُ كُـــــــــلٍّ فَالصَّغِيــــــــرَ سَمِّيَــــــــــنْ</span></div>
<div style="text-align: right"><span style="color: red;">34-&nbsp;</span><span data-begin="252.440" data-dur="3.428">أَوْ حُـــرِّكَ الْحَرْفَـــــانِ فِي كُــــلٍّ فَقُــــلْ</span></div>
<div style="text-align: left"><span data-begin="255.964" data-dur="3.283">كُــــلٌّ كَبِيــــــرٌ وَافْهَمَنْــــــــــهُ بِالْمُثُـــــــلْ</span></div>
<div style="text-align: center"><strong><span data-begin="259.586" data-dur="1.593" style="color: red;">أَقْسَامُ المَدِّ</span></strong></div>

<div style="text-align: right"><span style="color: red;">35-&nbsp;</span><span data-begin="261.976" data-dur="3.428">وَالْمَــــــدُّ أَصْلِـــــــيٌّ وَفَرْعِــــــــيٌّ لَـــــــهُ</span></div>
<div style="text-align: left"><span data-begin="265.572" data-dur="3.404">وَسَـــــــــمِّ أَوَّلًا طَبِيعِيًّــــــــــا وَهُـــــــــــو</span></div>
<div style="text-align: right"><span style="color: red;">36-&nbsp;</span><span data-begin="269.073" data-dur="3.187">مَــــا لَا تَوَقُّــــــفٌ لَــــــهُ عَـلَى سَبَــــــبْ</span></div>
<div style="text-align: left"><span data-begin="272.404" data-dur="2.945">وَلَا بِدُونِــــــــهِ الْحُـــــرُوفُ تُجْتَلَـــــــبْ</span></div>
<div style="text-align: right"><span style="color: red;">37-&nbsp;</span><span data-begin="275.494" data-dur="3.476">بَــلْ أَيُّ حَــرْفٍ غَيْـــرِ هَمْــزٍ أَوْ سُكُونْ</span></div>
<div style="text-align: left"><span data-begin="279.164" data-dur="3.211">جَــــا بَعْــــدَ مَـــدٍّ فَالطَّبِيعِـــــيَّ يَكُـــــونْ</span></div>
<div style="text-align: right"><span style="color: red;">38-&nbsp;</span><span data-begin="282.519" data-dur="3.187">وَالْآخَــــرُ الْفَرْعِــــيُّ مَوْقُــــوفٌ عَـــــلَى</span></div>
<div style="text-align: left"><span data-begin="285.827" data-dur="3.187">سَبَـــــبْ كَهَمْـــــزٍ أَوْ سُكُــــونٍ مُسْجَـلَا</span></div>
<div style="text-align: right"><span style="color: red;">39-&nbsp;</span><span data-begin="289.230" data-dur="3.090">حُــــــرُوفُـــــــــهُ ثَلَاثَـــــــــــةٌ فَعِيــهَـــــــــا</span></div>
<div style="text-align: left"><span data-begin="292.538" data-dur="3.838">فِـــي لَفْـــظِ وَايٍ وَهْـــيَ فِــي نُوحِيهَــــا</span></div>
<div style="text-align: right"><span style="color: red;">40-&nbsp;</span><span data-begin="296.618" data-dur="3.476">وَالكَسْــــرُ قَبْـــلَ الْيَـــا وَقَبْـلَ الْوَاوِ ضَمْ</span></div>
<div style="text-align: left"><span data-begin="300.287" data-dur="3.525">شَـــرْطٌ وَفَتْــــحٌ قَبْــــلَ أَلْـــــفٍ يُلْتَـــــزَمْ</span></div>
<div style="text-align: right"><span style="color: red;">41-&nbsp;</span><span data-begin="304.005" data-dur="3.428">وَاللِّيـــــنُ مِنْهَـــــا الْيَـــــا وَوَاوٌ سُكِّنَـــــــا</span></div>
<div style="text-align: left"><span data-begin="307.577" data-dur="3.211">إِنِ انْفِتَــــــــاحٌ قَبْـــــــلَ كُـــــــلٍّ أُعْلِنَــــــا</span></div>
<div style="text-align: center"><strong><span data-begin="311.488" data-dur="1.473" style="color: red;">أَحْكَامُ الْمَدِّ</span></strong></div>

<div style="text-align: right"><span style="color: red;">42-&nbsp;</span><span data-begin="313.637" data-dur="3.187">لِلْمَــــــدِّ أَحْكَـــــــامٌ ثَلَاثَـــــــــةٌ تَــــــدُومْ</span></div>
<div style="text-align: left"><span data-begin="317.016" data-dur="3.331">وَهْــــيَ الْوُجُــــوبُ وَالْجَــوَازُ وَاللُّـزُومْ</span></div>
<div style="text-align: right"><span style="color: red;">43-&nbsp;</span><span data-begin="320.565" data-dur="2.897">فَوَاجِـــــبٌ إِنْ جَــــاءَ هَمْـــــزٌ بَعْــدَ مَــدْ</span></div>
<div style="text-align: left"><span data-begin="323.703" data-dur="3.211">فِـــــي كِلْمَـــــــةٍ وَذَا بِمُتَّصِـــــــلْ يُعَــــــدْ</span></div>
<div style="text-align: right"><span style="color: red;">44-&nbsp;</span><span data-begin="327.107" data-dur="3.500">وَجَــــــائِـزٌ مَــــدٌّ وَقَصْــــــرٌ إِنْ فُصِــــــلْ</span></div>
<div style="text-align: left"><span data-begin="330.753" data-dur="3.380">كُــــــلٌّ بِكِلْمَـــــــــةٍ وَهَــذَا الْمُنْفَصِــــــلْ</span></div>
<div style="text-align: right"><span style="color: red;">45-&nbsp;</span><span data-begin="334.229" data-dur="3.042">وَمِثْــــــلُ ذَا إِنْ عَـــــــرَضَ السُّكُـــــــونُ</span></div>
<div style="text-align: left"><span data-begin="337.343" data-dur="3.162">وَقْفًـــــــــا كَــتَعْلَمُــــــــــونَ نَسْتَعِيـــــــــنُ</span></div>
<div style="text-align: right"><span style="color: red;">46-&nbsp;</span><span data-begin="340.650" data-dur="3.235">أَوْ قُــــدِّمَ الْهَمْـــــــزُ عَـــــلَى الْمَــــدِّ وَذَا</span></div>
<div style="text-align: left"><span data-begin="343.933" data-dur="3.573">بَــــــدَلْ كَــآمَنُـــــــوا وَإِيمَانًـــــــــا خُـــــذَا</span></div>
<div style="text-align: right"><span style="color: red;">47-&nbsp;</span><span data-begin="347.651" data-dur="3.283">وَلَازِمٌ إِنِ السُّــكُــــــــــــونُ أُصِّـــــــــــــلَا</span></div>
<div style="text-align: left"><span data-begin="351.127" data-dur="3.331">وَصْـــــلًا وَوَقْفًـــــا بَعْـــدَ مَـــدٍّ طُــــــوِّلَا</span></div>
<div style="text-align: center"><strong><span data-begin="355.111" data-dur="2.076" style="color: red;">أَقْسَامُ المَدِّ اللَّازِمِ</span></strong></div>

<div style="text-align: right"><span style="color: red;">48-&nbsp;</span><span data-begin="358.128" data-dur="3.162">أَقْسَــــــــــامُ لَازِمٍ لَــدَيْهِـــــــــمْ أَرْبَعَـــــــهْ</span></div>
<div style="text-align: left"><span data-begin="361.629" data-dur="3.235">وَتِلْـــــــكَ كِلْمِــــــيٌّ وَحَرْفِـــــــيٌّ مَعَــــهْ</span></div>
<div style="text-align: right"><span style="color: red;">49-&nbsp;</span><span data-begin="365.129" data-dur="3.042">كِـــــلَاهُمَـــــــــا مُخَفَّـــــــــفٌ مُثَقَّـــــــــلُ</span></div>
<div style="text-align: left"><span data-begin="368.364" data-dur="3.356">فَــــــــــهَذِهِ أَرْبَعَــــــــــــــةٌ تُـفَـصَّــــــــــــلُ</span></div>
<div style="text-align: right"><span style="color: red;">50-&nbsp;</span><span data-begin="371.913" data-dur="2.969">فَــــإِنْ بِكِلْمَــــــــةٍ سُكُــــــونٌ اجْتَمَـــــــعْ</span></div>
<div style="text-align: left"><span data-begin="374.978" data-dur="3.380">مَـــعْ حَــرْفِ مَـدٍّ فَهْـــــوَ كِلْمِـــيٌّ وَقَـــعْ</span></div>
<div style="text-align: right"><span style="color: red;">51-&nbsp;</span><span data-begin="378.479" data-dur="3.283">أَوْ فِـــــي ثُلَاثِـــــيِّ الْحُـــــرُوفِ وُجِـــدَا</span></div>
<div style="text-align: left"><span data-begin="381.859" data-dur="3.356">وَالْمَـــــدُّ وَسْطُـــــــهُ فَحَرْفِــــــــيٌّ بَــــــدَا</span></div>
<div style="text-align: right"><span style="color: red;">52-&nbsp;</span><span data-begin="385.359" data-dur="3.235">كِــلَاهُــمَـــــــا مُثَقَّـــــــلٌ إِنْ أُدْغِمَـــــــــــا</span></div>
<div style="text-align: left"><span data-begin="388.739" data-dur="3.380">مَخَفَّــــــــفٌ كُـــــلٌّ إِذَا لَـــــمْ يُدْغَمَـــــــا</span></div>
<div style="text-align: right"><span style="color: red;">53-&nbsp;</span><span data-begin="392.167" data-dur="3.138">وَالـــلَّازِمُ الْحَرْفِـــــــــيُّ أَوَّلَ السُّــــــــوَرْ</span></div>
<div style="text-align: left"><span data-begin="395.522" data-dur="3.452">وُجُــــــودُهُ وَفِــــي ثَمَــــــانٍ انْحَصَـــــــرْ</span></div>
<div style="text-align: right"><span style="color: red;">54-&nbsp;</span><span data-begin="399.143" data-dur="3.283">يَجْمَعُهَــــا حُـــرُوفُ كَــمْ عَسَــلْ نَقَصْ</span></div>
<div style="text-align: left"><span data-begin="402.571" data-dur="3.259">وَعَيْـــنُ ذُو وَجْهَيْــــنِ والطُّــولُ أَخَـصْ</span></div>
<div style="text-align: right"><span style="color: red;">55-&nbsp;</span><span data-begin="406.023" data-dur="3.404">وَمَــا سِــوَى الحَــرْفِ الثُّلَاثِــي لَا أَلِفْ</span></div>
<div style="text-align: left"><span data-begin="409.471" data-dur="3.259">فَــــــــمَدُّهُ مَـــــــدٌّ طَبِيعِـــــــــيٌّ أُلِــــــــفْ</span></div>
<div style="text-align: right"><span style="color: red;">56-&nbsp;</span><span data-begin="413.290" data-dur="3.235">وَذَاكَ أَيْضًـــــا فِـــي فَوَاتِــــــحِ السُّـــــوَرْ</span></div>
<div style="text-align: left"><span data-begin="416.670" data-dur="3.428">فِـــي لَفْـــظِ حَــيٌّ طَاهِـــرٌ قَـدِ انْحَصَــــرْ</span></div>
<div style="text-align: right"><span style="color: red;">57-&nbsp;</span><span data-begin="420.291" data-dur="3.162">وَيَجْمَــــعُ الْفَوَاتِــــــحَ الْأَرْبَـــــعْ عَشَــــرْ</span></div>
<div style="text-align: left"><span data-begin="423.767" data-dur="3.331">صِلْــــهُ سُحَيْـــرًا مَنْ قَطَعْـــكَ ذَا اشْتَهَرْ</span></div>
<div style="text-align: right"><span style="color: red;">58-&nbsp;</span><span data-begin="427.388" data-dur="3.259">وَتَـــــــمَّ ذَا النَّظْــــــــــمُ بِحَمْــــــــــدِ اللَّهِ</span></div>
<div style="text-align: left"><span data-begin="430.888" data-dur="3.138">عَـــــــلَى تَمَامِـــــــــهِ بِــــــلَا تَنَاهِــــــــــي</span></div>
<div style="text-align: right"><span style="color: red;">59-&nbsp;</span><span data-begin="434.172" data-dur="3.718">أَبْيَـــــاتُـــهُ نَـــــدٌّ بَــــــدَا لِـــذِي النُّهَــــــى</span></div>
<div style="text-align: left"><span data-begin="438.010" data-dur="3.694">تَــارِيخُــــــهَا بُشْــــــرَى لِمَـــــنْ يُتْقِنُهَــــا</span></div>
<div style="text-align: right"><span style="color: red;">60-&nbsp;</span><span data-begin="441.800" data-dur="3.042">ثُــــــمَّ الصَّــــــــلَاةُ وَالسَّــــــلَامُ أَبَـــــــدَا</span></div>
<div style="text-align: left"><span data-begin="445.035" data-dur="3.331">عَــــــلَى خِتَـــــــامِ الْأَنْبِيَــــــاءِ أَحْمَــــــدَا</span></div>
<div style="text-align: right"><span style="color: red;">61-&nbsp;</span><span data-begin="448.511" data-dur="3.428">وَالْآلِ وَالصَّــــــحْبِ وَكُـــــــلِّ تَابِــــــــعِ</span></div>
<div style="text-align: left"><span data-begin="452.004" data-dur="3.476">وَكُـــــــلِّ قَــــــــارِئٍ وَكُـــــــلِّ سَامِـــــــعِ</span></div>




</div>
</div>





<script>
function doorfun1() {
    var x = document.getElementById("baya1");
    var x1 = document.getElementById("baya2");
	var x2 = document.getElementById("baya3");
	var x3 = document.getElementById("baya4");
	var x4 = document.getElementById("baya5");
	var x5 = document.getElementById("baya6");
	var x6 = document.getElementById("baya7");
	var x7 = document.getElementById("baya8");
	var x8 = document.getElementById("baya9");
	var x9 = document.getElementById("baya10");
	
       x.style.display = "block";
   	   x1.style.display = "none";
	   x2.style.display = "none";
	   x3.style.display = "none";
	   x4.style.display = "none";
	   x5.style.display = "none";
	   x6.style.display = "none";
	   x7.style.display = "none";
	   x8.style.display = "none";
	   x9.style.display = "none";
document.getElementById("mySidenav10").style.width = "0";
    
}
function doorfun2() {
    var x = document.getElementById("baya1");
    var x1 = document.getElementById("baya2");
	var x2 = document.getElementById("baya3");
	var x3 = document.getElementById("baya4");
	var x4 = document.getElementById("baya5");
	var x5 = document.getElementById("baya6");
	var x6 = document.getElementById("baya7");
	var x7 = document.getElementById("baya8");
	var x8 = document.getElementById("baya9");
	var x9 = document.getElementById("baya10");
	
       x.style.display = "none";
   	   x1.style.display = "block";
	   x2.style.display = "none";
	   x3.style.display = "none";
	   x4.style.display = "none";
	   x5.style.display = "none";
	   x6.style.display = "none";
	   x7.style.display = "none";
	   x8.style.display = "none";
	   x9.style.display = "none";
document.getElementById("mySidenav10").style.width = "0";
    
}
function doorfun3() {
    var x = document.getElementById("baya1");
    var x1 = document.getElementById("baya2");
	var x2 = document.getElementById("baya3");
	var x3 = document.getElementById("baya4");
	var x4 = document.getElementById("baya5");
	var x5 = document.getElementById("baya6");
	var x6 = document.getElementById("baya7");
	var x7 = document.getElementById("baya8");
	var x8 = document.getElementById("baya9");
	var x9 = document.getElementById("baya10");
	
       x.style.display = "none";
   	   x1.style.display = "none";
	   x2.style.display = "block";
	   x3.style.display = "none";
	   x4.style.display = "none";
	   x5.style.display = "none";
	   x6.style.display = "none";
	   x7.style.display = "none";
	   x8.style.display = "none";
	   x9.style.display = "none";
document.getElementById("mySidenav10").style.width = "0";
    
}
function doorfun4() {
    var x = document.getElementById("baya1");
    var x1 = document.getElementById("baya2");
	var x2 = document.getElementById("baya3");
	var x3 = document.getElementById("baya4");
	var x4 = document.getElementById("baya5");
	var x5 = document.getElementById("baya6");
	var x6 = document.getElementById("baya7");
	var x7 = document.getElementById("baya8");
	var x8 = document.getElementById("baya9");
	var x9 = document.getElementById("baya10");
	
       x.style.display = "none";
   	   x1.style.display = "none";
	   x2.style.display = "none";
	   x3.style.display = "block";
	   x4.style.display = "none";
	   x5.style.display = "none";
	   x6.style.display = "none";
	   x7.style.display = "none";
	   x8.style.display = "none";
	   x9.style.display = "none";
document.getElementById("mySidenav10").style.width = "0";
    
}
function doorfun5() {
    var x = document.getElementById("baya1");
    var x1 = document.getElementById("baya2");
	var x2 = document.getElementById("baya3");
	var x3 = document.getElementById("baya4");
	var x4 = document.getElementById("baya5");
	var x5 = document.getElementById("baya6");
	var x6 = document.getElementById("baya7");
	var x7 = document.getElementById("baya8");
	var x8 = document.getElementById("baya9");
	var x9 = document.getElementById("baya10");
	
       x.style.display = "none";
   	   x1.style.display = "none";
	   x2.style.display = "none";
	   x3.style.display = "none";
	   x4.style.display = "block";
	   x5.style.display = "none";
	   x6.style.display = "none";
	   x7.style.display = "none";
	   x8.style.display = "none";
	   x9.style.display = "none";
document.getElementById("mySidenav10").style.width = "0";
    
}
function doorfun6() {
    var x = document.getElementById("baya1");
    var x1 = document.getElementById("baya2");
	var x2 = document.getElementById("baya3");
	var x3 = document.getElementById("baya4");
	var x4 = document.getElementById("baya5");
	var x5 = document.getElementById("baya6");
	var x6 = document.getElementById("baya7");
	var x7 = document.getElementById("baya8");
	var x8 = document.getElementById("baya9");
	var x9 = document.getElementById("baya10");
	
       x.style.display = "none";
   	   x1.style.display = "none";
	   x2.style.display = "none";
	   x3.style.display = "none";
	   x4.style.display = "none";
	   x5.style.display = "block";
	   x6.style.display = "none";
	   x7.style.display = "none";
	   x8.style.display = "none";
	   x9.style.display = "none";
document.getElementById("mySidenav10").style.width = "0";
    
}
function doorfun7() {
    var x = document.getElementById("baya1");
    var x1 = document.getElementById("baya2");
	var x2 = document.getElementById("baya3");
	var x3 = document.getElementById("baya4");
	var x4 = document.getElementById("baya5");
	var x5 = document.getElementById("baya6");
	var x6 = document.getElementById("baya7");
	var x7 = document.getElementById("baya8");
	var x8 = document.getElementById("baya9");
	var x9 = document.getElementById("baya10");
	
       x.style.display = "none";
   	   x1.style.display = "none";
	   x2.style.display = "none";
	   x3.style.display = "none";
	   x4.style.display = "none";
	   x5.style.display = "none";
	   x6.style.display = "block";
	   x7.style.display = "none";
	   x8.style.display = "none";
	   x9.style.display = "none";
document.getElementById("mySidenav10").style.width = "0";
    
}
function doorfun8() {
    var x = document.getElementById("baya1");
    var x1 = document.getElementById("baya2");
	var x2 = document.getElementById("baya3");
	var x3 = document.getElementById("baya4");
	var x4 = document.getElementById("baya5");
	var x5 = document.getElementById("baya6");
	var x6 = document.getElementById("baya7");
	var x7 = document.getElementById("baya8");
	var x8 = document.getElementById("baya9");
	var x9 = document.getElementById("baya10");
	
       x.style.display = "none";
   	   x1.style.display = "none";
	   x2.style.display = "none";
	   x3.style.display = "none";
	   x4.style.display = "none";
	   x5.style.display = "none";
	   x6.style.display = "none";
	   x7.style.display = "block";
	   x8.style.display = "none";
	   x9.style.display = "none";
document.getElementById("mySidenav10").style.width = "0";
    
}
function doorfun9() {
    var x = document.getElementById("baya1");
    var x1 = document.getElementById("baya2");
	var x2 = document.getElementById("baya3");
	var x3 = document.getElementById("baya4");
	var x4 = document.getElementById("baya5");
	var x5 = document.getElementById("baya6");
	var x6 = document.getElementById("baya7");
	var x7 = document.getElementById("baya8");
	var x8 = document.getElementById("baya9");
	var x9 = document.getElementById("baya10");
	
       x.style.display = "none";
   	   x1.style.display = "none";
	   x2.style.display = "none";
	   x3.style.display = "none";
	   x4.style.display = "none";
	   x5.style.display = "none";
	   x6.style.display = "none";
	   x7.style.display = "none";
	   x8.style.display = "block";
	   x9.style.display = "none";
document.getElementById("mySidenav10").style.width = "0";
    
}
function doorfun10() {
    var x = document.getElementById("baya1");
    var x1 = document.getElementById("baya2");
	var x2 = document.getElementById("baya3");
	var x3 = document.getElementById("baya4");
	var x4 = document.getElementById("baya5");
	var x5 = document.getElementById("baya6");
	var x6 = document.getElementById("baya7");
	var x7 = document.getElementById("baya8");
	var x8 = document.getElementById("baya9");
	var x9 = document.getElementById("baya10");
	
       x.style.display = "none";
   	   x1.style.display = "none";
	   x2.style.display = "none";
	   x3.style.display = "none";
	   x4.style.display = "none";
	   x5.style.display = "none";
	   x6.style.display = "none";
	   x7.style.display = "none";
	   x8.style.display = "none";
	   x9.style.display = "block";
document.getElementById("mySidenav10").style.width = "0";
    
}
function doorfun11() {
    var x = document.getElementById("baya1");
    var x1 = document.getElementById("baya2");
	var x2 = document.getElementById("baya3");
	var x3 = document.getElementById("baya4");
	var x4 = document.getElementById("baya5");
	var x5 = document.getElementById("baya6");
	var x6 = document.getElementById("baya7");
	var x7 = document.getElementById("baya8");
	var x8 = document.getElementById("baya9");
	var x9 = document.getElementById("baya10");
	
       x.style.display = "block";
   	   x1.style.display = "block";
	   x2.style.display = "block";
	   x3.style.display = "block";
	   x4.style.display = "block";
	   x5.style.display = "block";
	   x6.style.display = "block";
	   x7.style.display = "block";
	   x8.style.display = "block";
	   x9.style.display = "block";
document.getElementById("mySidenav10").style.width = "0";
    
}
function funfun() {
window.open ('two.html','_self',false)
    
}
function boob() {
range.selectNodeContents(document.getElementById('d'));
selection.removeAllRanges();
selection.addRange(range);
}
function boob1() {
range.selectNodeContents(document.getElementById('baya1'));
selection.removeAllRanges();
selection.addRange(range);
}
function boob2() {
range.selectNodeContents(document.getElementById('baya2'));
selection.removeAllRanges();
selection.addRange(range);
}
function boob3() {
range.selectNodeContents(document.getElementById('baya3'));
selection.removeAllRanges();
selection.addRange(range);
}
function boob4() {
range.selectNodeContents(document.getElementById('baya4'));
selection.removeAllRanges();
selection.addRange(range);
}
function boob5() {
range.selectNodeContents(document.getElementById('baya5'));
selection.removeAllRanges();
selection.addRange(range);
}
function boob6() {
range.selectNodeContents(document.getElementById('baya6'));
selection.removeAllRanges();
selection.addRange(range);
}
function boob7() {
range.selectNodeContents(document.getElementById('baya7'));
selection.removeAllRanges();
selection.addRange(range);
}
function boob8() {
range.selectNodeContents(document.getElementById('baya8'));
selection.removeAllRanges();
selection.addRange(range);
}
function boob9() {
range.selectNodeContents(document.getElementById('baya9'));
selection.removeAllRanges();
selection.addRange(range);
}
function boob10() {
range.selectNodeContents(document.getElementById('baya10'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo1() {
range.selectNodeContents(document.getElementById('bay1'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo2() {
range.selectNodeContents(document.getElementById('bay2'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo3() {
range.selectNodeContents(document.getElementById('bay3'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo4() {
range.selectNodeContents(document.getElementById('bay4'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo5() {
range.selectNodeContents(document.getElementById('bay5'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo6() {
range.selectNodeContents(document.getElementById('bay6'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo7() {
range.selectNodeContents(document.getElementById('bay7'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo8() {
range.selectNodeContents(document.getElementById('bay8'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo9() {
range.selectNodeContents(document.getElementById('bay9'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo10() {
range.selectNodeContents(document.getElementById('bay10'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo11() {
range.selectNodeContents(document.getElementById('bay11'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo12() {
range.selectNodeContents(document.getElementById('bay12'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo13() {
range.selectNodeContents(document.getElementById('bay13'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo14() {
range.selectNodeContents(document.getElementById('bay14'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo15() {
range.selectNodeContents(document.getElementById('bay15'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo16() {
range.selectNodeContents(document.getElementById('bay16'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo17() {
range.selectNodeContents(document.getElementById('bay17'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo18() {
range.selectNodeContents(document.getElementById('bay18'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo19() {
range.selectNodeContents(document.getElementById('bay19'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo20() {
range.selectNodeContents(document.getElementById('bay20'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo21() {
range.selectNodeContents(document.getElementById('bay21'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo22() {
range.selectNodeContents(document.getElementById('bay22'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo23() {
range.selectNodeContents(document.getElementById('bay23'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo24() {
range.selectNodeContents(document.getElementById('bay24'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo25() {
range.selectNodeContents(document.getElementById('bay25'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo26() {
range.selectNodeContents(document.getElementById('bay26'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo27() {
range.selectNodeContents(document.getElementById('bay27'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo28() {
range.selectNodeContents(document.getElementById('bay28'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo29() {
range.selectNodeContents(document.getElementById('bay29'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo30() {
range.selectNodeContents(document.getElementById('bay30'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo31() {
range.selectNodeContents(document.getElementById('bay31'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo32() {
range.selectNodeContents(document.getElementById('bay32'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo33() {
range.selectNodeContents(document.getElementById('bay33'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo34() {
range.selectNodeContents(document.getElementById('bay34'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo35() {
range.selectNodeContents(document.getElementById('bay35'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo36() {
range.selectNodeContents(document.getElementById('bay36'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo37() {
range.selectNodeContents(document.getElementById('bay37'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo38() {
range.selectNodeContents(document.getElementById('bay38'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo39() {
range.selectNodeContents(document.getElementById('bay39'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo40() {
range.selectNodeContents(document.getElementById('bay40'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo41() {
range.selectNodeContents(document.getElementById('bay41'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo42() {
range.selectNodeContents(document.getElementById('bay42'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo43() {
range.selectNodeContents(document.getElementById('bay43'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo44() {
range.selectNodeContents(document.getElementById('bay44'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo45() {
range.selectNodeContents(document.getElementById('bay45'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo46() {
range.selectNodeContents(document.getElementById('bay46'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo47() {
range.selectNodeContents(document.getElementById('bay47'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo48() {
range.selectNodeContents(document.getElementById('bay48'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo49() {
range.selectNodeContents(document.getElementById('bay49'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo50() {
range.selectNodeContents(document.getElementById('bay50'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo51() {
range.selectNodeContents(document.getElementById('bay51'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo52() {
range.selectNodeContents(document.getElementById('bay52'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo53() {
range.selectNodeContents(document.getElementById('bay53'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo54() {
range.selectNodeContents(document.getElementById('bay54'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo55() {
range.selectNodeContents(document.getElementById('bay55'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo56() {
range.selectNodeContents(document.getElementById('bay56'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo57() {
range.selectNodeContents(document.getElementById('bay57'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo58() {
range.selectNodeContents(document.getElementById('bay58'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo59() {
range.selectNodeContents(document.getElementById('bay59'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo60() {
range.selectNodeContents(document.getElementById('bay60'));
selection.removeAllRanges();
selection.addRange(range);
}
function bo61() {
range.selectNodeContents(document.getElementById('bay61'));
selection.removeAllRanges();
selection.addRange(range);
}



input.onchange = function(e){
  var sound = document.getElementById('passage-audio1');
  sound.src = URL.createObjectURL(this.files[0]);
 
  sound.onend = function(e) {
    URL.revokeObjectURL(this.src);
  }
}

function walid1() {
 window.scrollTo(0, 0);
}
 
 
 
 
var myArray = [

"إِذَا مَــا اعْتَقَـــدْتَ الدَّهْـرَ يَا صَاحِ هَذِهِ",
"فَأَنْـــتَ عَلَـــى خَيْـــرٍ تَبِيــتُ وَتُصْبِـــحُ"




];


function opentest() {
var randomItem = myArray[Math.floor(Math.random()*myArray.length)];
 document.getElementById("demo").innerHTML= randomItem;	  

}



var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}

function myFunction() {
   document.getElementById("d").style.fontSize ="20px";
   document.getElementById("passage-text").style.fontSize ="20px";
   document.getElementById("d0").style.fontSize ="20px";
   document.getElementById("demo").style.fontSize ="20px";
   document.getElementById("mySidenav").style.width = "0"; 
}
  
function myFunction1() {
   document.getElementById("d").style.fontSize ="21px";
   document.getElementById("passage-text").style.fontSize ="21px";
   document.getElementById("d0").style.fontSize ="20.5px";
   document.getElementById("demo").style.fontSize ="21px";
   document.getElementById("mySidenav").style.width = "0";
  
}
function myFunction2() {
   document.getElementById("d").style.fontSize ="22px";
   document.getElementById("passage-text").style.fontSize ="22px";
   document.getElementById("d0").style.fontSize ="21px";
   document.getElementById("demo").style.fontSize ="22px";
   document.getElementById("mySidenav").style.width = "0";
 
}
function myFunction3() {
   document.getElementById("d").style.fontSize ="23px";
   document.getElementById("passage-text").style.fontSize ="23px";
   document.getElementById("d0").style.fontSize ="21.5px";
   document.getElementById("demo").style.fontSize ="23px";
   document.getElementById("mySidenav").style.width = "0";
  
}
function myFunction4() {
   document.getElementById("d").style.fontSize ="24px";
   document.getElementById("passage-text").style.fontSize ="24px";
   document.getElementById("d0").style.fontSize ="22px";
   document.getElementById("demo").style.fontSize ="24px";
   document.getElementById("mySidenav").style.width = "0";
  
}
function myFunction5() {
   document.getElementById("d").style.fontSize ="25px";
   document.getElementById("passage-text").style.fontSize ="25px";
   document.getElementById("d0").style.fontSize ="22.5px";
   document.getElementById("demo").style.fontSize ="25px";
   document.getElementById("mySidenav").style.width = "0";
  
}
function myFunction6() {
   document.getElementById("d").style.fontSize ="26px";
   document.getElementById("passage-text").style.fontSize ="26px";
   document.getElementById("d0").style.fontSize ="23px";
   document.getElementById("demo").style.fontSize ="26px";
   document.getElementById("mySidenav").style.width = "0";

}
function myFunction7() {
   document.getElementById("d").style.fontSize ="27px";
   document.getElementById("passage-text").style.fontSize ="27px";
   document.getElementById("d0").style.fontSize ="23.5px";
   document.getElementById("demo").style.fontSize ="27px";
   document.getElementById("mySidenav").style.width = "0";
  
}
function myFunction8() {
   document.getElementById("d").style.fontSize ="28px";
   document.getElementById("passage-text").style.fontSize ="28px";
   document.getElementById("d0").style.fontSize ="24px";
   document.getElementById("demo").style.fontSize ="28px";
   document.getElementById("mySidenav").style.width = "0";

}
function myFunction9() {
   document.getElementById("d").style.fontSize ="29px";
   document.getElementById("passage-text").style.fontSize ="29px";
   document.getElementById("d0").style.fontSize ="24.5px";
   document.getElementById("demo").style.fontSize ="29px";
   document.getElementById("mySidenav").style.width = "0";
 
}
function myFunction10() {
   document.getElementById("d").style.fontSize ="30px";
   document.getElementById("passage-text").style.fontSize ="30px";
   document.getElementById("d0").style.fontSize ="26px";
   document.getElementById("demo").style.fontSize ="30px";
   document.getElementById("mySidenav").style.width = "0";

}
function myFunction11() {
   document.getElementById("d").style.fontSize ="31px";
   document.getElementById("passage-text").style.fontSize ="31px";
   document.getElementById("d0").style.fontSize ="26.5px";
   document.getElementById("demo").style.fontSize ="31px";
   document.getElementById("mySidenav").style.width = "0";
  
}
function myFunction12() {
   document.getElementById("d").style.fontSize ="32px";
   document.getElementById("passage-text").style.fontSize ="32px";
   document.getElementById("d0").style.fontSize ="27px";
   document.getElementById("demo").style.fontSize ="32px";
   document.getElementById("mySidenav").style.width = "0";
  
}
function myFunction13() {
   document.getElementById("d").style.fontSize ="33px";
   document.getElementById("passage-text").style.fontSize ="33px";
   document.getElementById("d0").style.fontSize ="27.5px";
   document.getElementById("demo").style.fontSize ="33px";
   document.getElementById("mySidenav").style.width = "0";

}
function myFunction14() {
   document.getElementById("d").style.fontSize ="34px";
   document.getElementById("passage-text").style.fontSize ="34px";
   document.getElementById("d0").style.fontSize ="28px";
   document.getElementById("demo").style.fontSize ="34px";
   document.getElementById("mySidenav").style.width = "0";
  
}
function myFunction15() {
   document.getElementById("d").style.fontSize ="35px";
   document.getElementById("passage-text").style.fontSize ="35px";
   document.getElementById("d0").style.fontSize ="28.5px";
   document.getElementById("demo").style.fontSize ="35px";
   document.getElementById("mySidenav").style.width = "0";
  
}
function myFunction16() {
   document.getElementById("d").style.fontSize ="36px";
   document.getElementById("passage-text").style.fontSize ="36px";
   document.getElementById("d0").style.fontSize ="29px";
   document.getElementById("demo").style.fontSize ="36px";
   document.getElementById("mySidenav").style.width = "0";
  
}
function myFunction17() {
   document.getElementById("d").style.fontSize ="37px";
   document.getElementById("passage-text").style.fontSize ="37px";
   document.getElementById("d0").style.fontSize ="29.5px";
   document.getElementById("demo").style.fontSize ="37px";
   document.getElementById("mySidenav").style.width = "0";
  
}
function myFunction18() {
   document.getElementById("d").style.fontSize ="38px";
   document.getElementById("passage-text").style.fontSize ="38px";
   document.getElementById("d0").style.fontSize ="30px";
   document.getElementById("demo").style.fontSize ="38px";
   document.getElementById("mySidenav").style.width = "0";
   
}
function myFunction19() {
   document.getElementById("d").style.fontSize ="39px";
   document.getElementById("passage-text").style.fontSize ="39px";
   document.getElementById("d0").style.fontSize ="30.5x";
   document.getElementById("demo").style.fontSize ="39px";
   document.getElementById("mySidenav").style.width = "0";
 
}
function myFunction20() {
   document.getElementById("d").style.fontSize ="40px";
   document.getElementById("passage-text").style.fontSize ="40px";
   document.getElementById("d0").style.fontSize ="31px";
   document.getElementById("demo").style.fontSize ="40px";
   document.getElementById("mySidenav").style.width = "0";
  
}
function myFunction21() {
   document.getElementById("d").style.fontSize ="41px";
   document.getElementById("passage-text").style.fontSize ="41px";
   document.getElementById("d0").style.fontSize ="31.5px";
   document.getElementById("demo").style.fontSize ="41px";
   document.getElementById("mySidenav").style.width = "0";
  
}
function myFunction22() {
   document.getElementById("d").style.fontSize ="42px";
   document.getElementById("passage-text").style.fontSize ="42px";
   document.getElementById("d0").style.fontSize ="32px";
   document.getElementById("demo").style.fontSize ="42px";
   document.getElementById("mySidenav").style.width = "0";

}
function myFunction23() {
   document.getElementById("d").style.fontSize ="43px";
   document.getElementById("passage-text").style.fontSize ="43px";
   document.getElementById("d0").style.fontSize ="32.5px";
   document.getElementById("demo").style.fontSize ="43px";
   document.getElementById("mySidenav").style.width = "0";
   
}
function opendoor() {
    document.getElementById("mySidenav10").style.width = "100%";
	
}
function openNav() {
    document.getElementById("mySidenav").style.width = "60px";
	
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
	
}
function openNav1() {
    document.getElementById("mySidenav1").style.height = "auto";
	
	
}
function openNav2() {
    document.getElementById("mySidenav2").style.height = "70%";		
}
function openNav3() {
    document.getElementById("mySidenav5").style.width = "100%";
	 document.getElementById("musiclose").style.left= "10px";
	 document.getElementById("musicopen").style.right= "-30px";
	
}
function openNav4() {
    document.getElementById("mySidenav6").style.width = "100%";
	 document.getElementById("musiclose").style.left= "10px";
	 document.getElementById("micopen").style.right= "-30px";
	
}

function openNav5() {
    document.getElementById("mySidenav7").style.width = "100%";
	 document.getElementById("musiclose").style.left= "10px";
	 document.getElementById("downopen").style.right= "-30px";
	
}function walid2() {
    document.getElementById("mySidenav5").style.width = "0%";
	document.getElementById("mySidenav6").style.width = "0%";
	document.getElementById("mySidenav7").style.width = "0%";
	 document.getElementById("musiclose").style.left= "-30px";
	 document.getElementById("musicopen").style.right= "150px";
	  document.getElementById("micopen").style.right= "180px";
	document.getElementById("downopen").style.right= "-30px";
}

function myFun() {
 document.getElementById("back").style.backgroundColor= "white"
 document.getElementById("mySidenav").style.backgroundColor=  "white"
 document.getElementById("mySidenav2").style.backgroundColor=  "white"
 document.getElementById("panal0").style.backgroundColor= "white"
 document.getElementById("panal").style.backgroundColor= "white"
 document.getElementById("panal1").style.backgroundColor= "white"
 document.getElementById("panal2").style.backgroundColor= "white"
 document.getElementById("mySidenav1").style.height = "0";
}
function myFun1() {
  document.getElementById("back").style.backgroundColor= "#ffffe0"
  document.getElementById("mySidenav").style.backgroundColor=  "#ffffe0"
  document.getElementById("mySidenav2").style.backgroundColor=  "#ffffe0"
  document.getElementById("panal0").style.backgroundColor= "#ffffe0"
  document.getElementById("panal").style.backgroundColor= "#ffffe0"
  document.getElementById("panal1").style.backgroundColor= "#ffffe0"
  document.getElementById("panal2").style.backgroundColor= "#ffffe0"
  document.getElementById("mySidenav1").style.height= "0";
}
function myFun2() {
  document.getElementById("back").style.backgroundColor= "#f7f2df"
  document.getElementById("mySidenav").style.backgroundColor=  "#f7f2df"
  document.getElementById("mySidenav2").style.backgroundColor=  "#f7f2df"
  document.getElementById("panal0").style.backgroundColor= "#f7f2df"
  document.getElementById("panal").style.backgroundColor= "#f7f2df"
  document.getElementById("panal1").style.backgroundColor= "#f7f2df"
  document.getElementById("panal2").style.backgroundColor= "#f7f2df"
  document.getElementById("mySidenav1").style.height= "0";
}
var range = document.createRange();
var selection = window.getSelection();

function my0() {
document.getElementById("passage-text").style.lineHeight= "105%"
document.getElementById("d").style.lineHeight= "105%"
document.getElementById("mySidenav2").style.height= "0";
}
function my1() {
document.getElementById("d").style.lineHeight= "110%"
document.getElementById("passage-text").style.lineHeight= "110%"
document.getElementById("mySidenav2").style.height= "0";
}
function my2() {
document.getElementById("d").style.lineHeight= "115%"
document.getElementById("passage-text").style.lineHeight= "115%"
document.getElementById("mySidenav2").style.height= "0";
}
function my3() {
document.getElementById("d").style.lineHeight= "120%"
document.getElementById("passage-text").style.lineHeight= "120%"
document.getElementById("mySidenav2").style.height= "0";
}
function my4() {
document.getElementById("d").style.lineHeight= "125%"
document.getElementById("passage-text").style.lineHeight= "125%"
document.getElementById("mySidenav2").style.height= "0";
}
function my5() {
document.getElementById("d").style.lineHeight= "130%"
document.getElementById("passage-text").style.lineHeight= "130%"
document.getElementById("mySidenav2").style.height= "0";
}
function my6() {
document.getElementById("d").style.lineHeight= "135%"
document.getElementById("passage-text").style.lineHeight= "135%"
document.getElementById("mySidenav2").style.height= "0";
}
function my7() {
document.getElementById("d").style.lineHeight= "140%"
document.getElementById("passage-text").style.lineHeight= "140%"
document.getElementById("mySidenav2").style.height= "0";
}
function my8() {
document.getElementById("d").style.lineHeight= "145%"
document.getElementById("passage-text").style.lineHeight= "145%"
document.getElementById("mySidenav2").style.height= "0";
}
function my9() {
document.getElementById("d").style.lineHeight= "150%"
document.getElementById("passage-text").style.lineHeight= "150%"
document.getElementById("mySidenav2").style.height= "0";
}
function my10() {
document.getElementById("d").style.lineHeight= "155%"
document.getElementById("passage-text").style.lineHeight= "155%"
document.getElementById("mySidenav2").style.height= "0";
}
function my11() {
document.getElementById("d").style.lineHeight= "160%"
document.getElementById("passage-text").style.lineHeight= "160%"
document.getElementById("mySidenav2").style.height= "0";
}
function my12() {
document.getElementById("d").style.lineHeight= "165%"
document.getElementById("passage-text").style.lineHeight= "165%"
document.getElementById("mySidenav2").style.height= "0";
}
function my13() {
document.getElementById("d").style.lineHeight= "170%"
document.getElementById("passage-text").style.lineHeight= "170%"
document.getElementById("mySidenav2").style.height= "0";
}


</script>
<script src="wal.js"></script>
<script src="wali1.js"></script>
</body>
</html>
