const optionMenu = document.querySelector(".select-menu"),
       selectBtn = optionMenu.querySelector(".select-btn"),
       options = optionMenu.querySelectorAll(".option"),
       sBtn_text = optionMenu.querySelector(".sBtn-text");

selectBtn.addEventListener("click", () => optionMenu.classList.toggle("active"));       

options.forEach(option =>{
    option.addEventListener("click", ()=>{
        let selectedOption = option.querySelector(".option-text").innerText;
        sBtn_text.innerText = selectedOption;

        optionMenu.classList.remove("active");
    });
});


/*document.addEventListener('DOMContentLoaded', () => {
    const toggleMenu = (selectBtnClass, optionsClass) => {
        const selectBtn = document.querySelector(selectBtnClass);
        const options = document.querySelector(optionsClass);

        selectBtn.addEventListener('click', () => {
            options.style.display = options.style.display === 'block' ? 'none' : 'block';
        });

        options.addEventListener('click', (event) => {
            if (event.target.classList.contains('option-text')) {
                selectBtn.querySelector('span').textContent = event.target.textContent;
                options.style.display = 'none';
            }
        });
    };

    toggleMenu('.select-btn', '.options');
    toggleMenu('.select-btn22', '.options22');
});*/
const optionMenu2 = document.querySelector(".select-menu22"),
       selectBtn2 = optionMenu2.querySelector(".select-btn22"),
       options2 = optionMenu2.querySelectorAll(".option22"),
       sBtn_text2 = optionMenu2.querySelector(".sBtn-text22");

selectBtn2.addEventListener("click", () => optionMenu2.classList.toggle("active"));       

options2.forEach(option =>{
    option.addEventListener("click", ()=>{
        let selectedOption = option.querySelector(".option-text22").innerText;
        sBtn_text2.innerText = selectedOption;

        optionMenu2.classList.remove("active");
    });
});

const optionMenu3 = document.querySelector(".select-menu33"),
       selectBtn3 = optionMenu3.querySelector(".select-btn33"),
       options3 = optionMenu3.querySelectorAll(".option33"),
       sBtn_text3 = optionMenu3.querySelector(".sBtn-text33");

selectBtn3.addEventListener("click", () => optionMenu3.classList.toggle("active"));       

options3.forEach(option =>{
    option.addEventListener("click", ()=>{
        let selectedOption = option.querySelector(".option-text33").innerText;
        sBtn_text3.innerText = selectedOption;

        optionMenu3.classList.remove("active");
    });
});



