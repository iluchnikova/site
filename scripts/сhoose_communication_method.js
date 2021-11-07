function choose(select, changingElementId){
    var sel = select.querySelector(`option[value="${select.value}"]`);
    var under = document.getElementById(changingElementId);
    var oldChild = under.querySelector('p');
    var newChild = document.createElement('p');
    var input = document.createElement('input');
    var radio;
    input.setAttribute('type', '"text"');
    if(sel.value === "email"){
        input.setAttribute ('name','email');
        input.setAttribute('placeholder', 'Введите email');
    }
    else if(sel.value === "call"){
        input.setAttribute('name','call');
        input.setAttribute('placeholder', 'Укажите номер телефона');
    }
    else if(sel.value === "messenger"){
        //console.log("messenger");
        input.setAttribute('name','messenger');
        input.setAttribute('placeholder', 'Укажите номер телефона');

        radio = document.createElement('p');
        ['Telegramm', 'WhatsApp', 'Viber'].forEach(element => {
            var a = document.createElement('input');
            var label = document.createElement('label');
            //label добавляем, т.к. при попытке добавления текста в inner
            //через innerText появляется закрывающий тег </inner>, который
            //ломает отображение (отображаются только кругляшки без текста)
            a.setAttribute('id', element);
            a.setAttribute('type','radio');
            a.setAttribute('name', 'messengerType');            
            a.setAttribute('value', element);
            label.setAttribute('for', element)
            label.innerText = element;
            radio.appendChild(a);
            radio.appendChild(label);
        });
        newChild.appendChild(radio);
    }
    newChild.appendChild(input);
    if(sel.value === "messenger"){
        newChild.appendChild(radio);
    }
    under.replaceChild(newChild, oldChild);
}