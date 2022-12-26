window.addEventListener("load", Script);

function New_P(text, id) {
    const p = document.createElement("p");
    p.innerHTML = text;
    if (typeof id !== undefined) p.id = id;

    return p;
}

function Script() {
// 1. Сделайте alert по нажатию на кнопку.
{
    document.body.appendChild(New_P("1. Сделайте alert по нажатию на кнопку."));
    const btn = document.createElement("button");
    btn.innerHTML = "alert";
    btn.addEventListener("click",()=>alert("alert"));
    document.body.appendChild(btn);
}
// 2. Сделайте изменение текста в input по нажатию кнопки.
{
    document.body.appendChild(New_P("2. Сделайте изменение текста в input по нажатию кнопки."));
    const inp = document.createElement("input");
    document.body.appendChild(inp);

    const btn = document.createElement("button");
    btn.innerHTML = "Изменить input";
    btn.addEventListener("click",()=>inp.value = "Текст изменился");
    document.body.appendChild(btn);
}
// 3. Сделайте вывод содержимого input по нажатию кнопки.
{
    document.body.appendChild(New_P("3. Сделайте вывод содержимого input по нажатию кнопки."));
    const inp = document.createElement("input");
    document.body.appendChild(inp);

    const btn = document.createElement("button");
    btn.innerHTML = "Вывод содержимого";
    btn.addEventListener("click",()=>{
        document.getElementById("p3")?.remove();
        btn.after(New_P(inp.value, "p3"));
    });
    document.body.appendChild(btn);
}
// 4. Сделайте кнопку по нажатию на нее, она выводит alert содержимое input, возведенное в квадрат.
{
    document.body.appendChild(New_P("4. Сделайте кнопку по нажатию на нее, она выводит alert содержимое input, возведенное в квадрат."));
    const inp = document.createElement("input");
    inp.value = 5;
    document.body.appendChild(inp);

    const btn = document.createElement("button");
    btn.innerHTML = "input в квадрате";
    btn.addEventListener("click",()=>{
        alert((+inp.value)**2);
    });
    document.body.appendChild(btn);
}
// 5. Сделайте кнопку по нажатию, она осуществляет обмен содержимым между двумя input.
{
    document.body.appendChild(New_P("5. Сделайте кнопку по нажатию, она осуществляет обмен содержимым между двумя input."));
    const inp1 = document.createElement("input");
    const inp2 = document.createElement("input");
    inp1.value = "Один";
    inp2.value = "Два";
    document.body.appendChild(inp1);
    document.body.appendChild(inp2);

    const btn = document.createElement("button");
    btn.innerHTML = "Обмен";
    btn.addEventListener("click",()=>{
       let temp = inp1.value;
       inp1.value = inp2.value;
       inp2.value = temp;
    });
    document.body.appendChild(btn);
}
// 6. Сделайте кнопку по нажатию на нее поменяется ее текст.
{
    document.body.appendChild(New_P("6. Сделайте кнопку по нажатию на нее поменяется ее текст."));
    const btn = document.createElement("button");
    btn.innerHTML = "Привет";
    btn.addEventListener("click",()=>{
        btn.innerHTML === "Привет" ?  btn.innerHTML = "Пока" : btn.innerHTML = "Привет";
    });
    document.body.appendChild(btn);
}
// 7. Сделайте кнопку по нажатию на нее, она меняет цвет текста в input, используя свойства CSS.
{
    document.body.appendChild(New_P("7. Сделайте кнопку по нажатию на нее, она меняет цвет текста в input, используя свойства CSS."));
    const inp = document.createElement("input");
    inp.value = "Текст";
    document.body.appendChild(inp);

    const btn = document.createElement("button");
    btn.innerHTML = "Изменить цвет input";
    btn.addEventListener("click",()=>inp.style.color = "orange");
    document.body.appendChild(btn);
}
// 8. Сделайте кнопки по нажатию на них, одна из них блокирует input с помощью атрибута disabled, а другая разблокирует.
{
    document.body.appendChild(New_P("8. Сделайте кнопки по нажатию на них, одна из них блокирует input с помощью атрибута disabled, а другая разблокирует."));
    const inp = document.createElement("input");
    document.body.appendChild(inp);

    const btn1 = document.createElement("button");
    const btn2 = document.createElement("button");
    btn1.innerHTML = "Заблокировать";
    btn2.innerHTML = "Разблокировать";
    btn1.addEventListener("click",()=>inp.disabled = true);
    btn2.addEventListener("click",()=>inp.disabled = false);
    document.body.appendChild(btn1);
    document.body.appendChild(btn2);
}
// 9. Сделайте кнопку при наведении на нее появляется alert.
{
    document.body.appendChild(New_P("9. Сделайте кнопку при наведении на нее появляется alert."));
    const btn = document.createElement("button");
    btn.innerHTML = "alert при наведении";
    btn.addEventListener("mouseover", ()=>alert("alert"));
    document.body.appendChild(btn);
}
// 10. Сделайте кнопку при двойном на нее появляется alert.
{
    document.body.appendChild(New_P("10. Сделайте кнопку при двойном на нее появляется alert."));
    const btn = document.createElement("button");
    btn.innerHTML = "alert при двойном нажатии";
    btn.addEventListener("dblclick", ()=>alert("alert"));
    document.body.appendChild(btn);
}
// 11. Сделайте область с помощью div при наведении на нее появляется alert.
{
    document.body.appendChild(New_P("11. Сделайте область с помощью div при наведении на нее появляется alert."));
    const div = document.createElement("div");
    div.style = "border: 2px solid; width: 50px; height: 25px";
    div.addEventListener('mouseover', ()=>alert("alert"));
    document.body.appendChild(div);
}
// 12. Сделайте кнопку и картинку, при нажатии кнопки картинка меняется.
{
    document.body.appendChild(New_P("12. Сделайте кнопку и картинку, при нажатии кнопки картинка меняется."));
    const img = document.createElement("img");
    img.width = 300;
    img.height = 300;

    const btn = document.createElement("button");
    btn.innerHTML = "Сменить картинку";
    btn.addEventListener("click", ()=>{
        fetch('https://api.thecatapi.com/v1/images/search')
        .then(resp => resp.json())
        .then(json => img.src = json[0].url)
    });

    document.body.appendChild(img);
    document.body.appendChild(document.createElement("br"));
    document.body.appendChild(btn);
    document.addEventListener('DOMContentLoaded',btn.click());
}
// 13. Сделайте alert по нажатию на кнопку. Используя this.
{
    document.body.appendChild(New_P("13. Сделайте alert по нажатию на кнопку. Используя this."));
    const btn = document.createElement("button");
    btn.innerHTML = "alert при нажатии";
    btn.onclick = () => alert(this);

    document.body.appendChild(btn);
}
// 14. Сделайте изменение текста в input по нажатию кнопки. Используя this.
{
    document.body.appendChild(New_P("14. Сделайте изменение текста в input по нажатию кнопки. Используя this."));
    const inp = document.createElement("input");
    document.body.appendChild(inp);

    const btn = document.createElement("button");
    btn.innerHTML = "Изменить input";
    btn.onclick = () => inp.value = "this";
    document.body.appendChild(btn);
}
// 15.Сделайте кнопку, при нажатии кнопки кнопка блокируется.
{
    document.body.appendChild(New_P("15.Сделайте кнопку, при нажатии кнопки кнопка блокируется."));
    const btn = document.createElement("button");
    btn.innerHTML = "Блокировать кнопку";
    btn.onclick = () => btn.disabled = true;
    document.body.appendChild(btn);
}
// 16. Сделайте кнопку, при нажатии кнопка считает количество нажатий на нее.
{
    document.body.appendChild(New_P("16. Сделайте кнопку, при нажатии кнопка считает количество нажатий на нее."));
    const btn = document.createElement("button");
    btn.innerHTML = "Счетчик нажатий";
    var n = 0;
    btn.addEventListener("click", () => {
        document.getElementById('lab1').innerHTML = "\t" + ++n;
    })
    document.body.appendChild(btn);

    const lab = document.createElement("label");
    lab.innerHTML = "\t" + n;
    lab.id = "lab1"
    btn.after(lab);
}
// 17. Сделайте кнопку, при нажатии курсор мышки должен измениться.
{
    document.body.appendChild(New_P("17. Сделайте кнопку, при нажатии курсор мышки должен измениться."));
    const btn = document.createElement("button");
    btn.innerHTML = "Изменить курсор";
    btn.addEventListener('click', () => {
        document.body.style.cursor = "crosshair";
    });
    document.body.appendChild(btn);
}
// 18. Cделайте так, чтобы при клике на кнопку исчезал элемент с id="hide"
{
    document.body.appendChild(New_P("18. Cделайте так, чтобы при клике на кнопку исчезал элемент с id='hide'"));
    const btn = document.createElement("button");
    btn.innerHTML = "Нажмите, чтобы спрятать текст";
    btn.addEventListener('click', () => {
        document.getElementById('hide').hidden = true;
    });
    document.body.appendChild(btn);

    const div = document.createElement("div");
    div.id = "hide";
    div.innerHTML = "Текст";
    document.body.appendChild(div);
}
// 19. Создайте кнопку, при клике на которую, она будет скрывать сама себя.
{
    document.body.appendChild(New_P("19. Создайте кнопку, при клике на которую, она будет скрывать сама себя."));
    const btn = document.createElement("button");
    btn.innerHTML = "Спрятать кнопку";
    btn.onclick = () => btn.hidden = true;
    document.body.appendChild(btn);
}
// 20. Напишите простой калькулятор.
{
    document.body.appendChild(New_P("20. Напишите простой калькулятор."));

    const wrap = document.createElement("div");
    wrap.className = "calc_wrapper";
    document.body.appendChild(wrap);

    const inp = document.createElement("input");
    inp.className = "calc_input";
    inp.type = "text";
    inp.readOnly = true;
    inp.value = 0;
    wrap.appendChild(inp);

    const div = document.createElement("div");
    div.className = "btn_wrapper";
    wrap.appendChild(div);

    const div1 = document.createElement("div");
    div1.className = "calc_num_div";
    div.appendChild(div1);

    const div2 = document.createElement("div");
    div2.className = "calc_sign_div";
    div.appendChild(div2);

    // 1-ый блок
    let nums = [7,8,9,4,5,6,1,2,3,'.',0,'='];
    var dot = false;
    for (let i = 0; i < 12; i++) {
        let num = nums[i];
        let btn = document.createElement("button");
        btn.className = "calc_btn";
        btn.innerHTML = num;

        if (num === '.'){
            btn.onclick = () =>  {
                if (dot) return;
                dot = true;
                let lastIsNumber = !isNaN(inp.value[inp.value.length-1]);
                if (lastIsNumber) inp.value += num;}
        } else if (num === '='){
            btn.onclick = () => {
                dot = false;
                let exp = inp.value.replace(/×/g, "*").replace(/÷/g, "/")
                inp.value = eval(exp);
            }
        } else
            btn.onclick = () => inp.value == '0' ? inp.value= num : inp.value+= num;
        div1.appendChild(btn);
    }

    // 2-ой блок
    let signs = ['+','-','×','÷'];
    for (let i = 0; i < 4; i++) {
        let sign = signs[i];
        let btn = document.createElement("button");
        btn.className = "calc_sign";
        btn.innerHTML = sign;
        btn.onclick = () =>  {
            dot = false;
            let lastIsSign = signs.join('').includes(inp.value[inp.value.length-1]) || inp.value[inp.value.length-1] == '.';
            if (!lastIsSign) inp.value += sign;
        }
        div2.appendChild(btn);
    }
}
}

