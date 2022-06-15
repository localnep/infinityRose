const element = document.getElementById("paragraf");

const ininal = document.querySelector(".ininal");
const kredi = document.querySelector(".kredi");
const havale = document.querySelector(".havale");
var resim1 = document.getElementById("resim");
var resim2 = document.getElementById("resimm");
const adres = document.getElementById("adress");
var inputadres = document.getElementById("adresim").value;

ininal.addEventListener("click",run);

function run(e)
{

    resim1.setAttribute("src","foto/ininal.png");
    element.textContent = "İninal Ödeme Sistemi"; //renk değişikliği gerekli ininal renkleri
    resim2.setAttribute("src","foto/barkodi.png");
    adres.textContent="";   

}

kredi.addEventListener("click",run2);

function run2(e)
{
    element.textContent = "EFT/Havale Ödeme Sistemi";
    resim1.setAttribute("src","foto/havale.png");
    resim2.setAttribute("src","foto/iban.jpg") ;
    adres.textContent= "";   
}

havale.addEventListener("click",run3);

function run3(e)
{
    element.textContent = "Kapıda Ödeme Sistemi";
    resim1.setAttribute("src","foto/kargocu.jpg");
    resim2.setAttribute("src","");
    adres.textContent =inputadres;
}


