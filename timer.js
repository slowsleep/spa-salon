const timer = document.querySelector('#timer');
const USER_ID = timer.dataset.userid;


async function getTimeInterval(id) {
    let response = await fetch('./users.json');
    let json = await response.json();
    let users = json.users;
    let nowDate = new Date();
    let dateCreated;

    users.forEach((el) => {
        if (el.id == id) {
            dateCreated = new Date(el.created_at);
        }
    });

    // разница дат в секунда, а не в миллисекундах
    let diff = (nowDate - dateCreated) / 1000;
    // время таймера с вычетом одного дня (истечение времени)
    let hours = parseInt(24 -(diff / 60 / 60));
    let minutes = parseInt(60 - ((diff / 60) - (parseInt(diff / 60 / 60) * 60) ));
    let seconds = parseInt(60 - (diff % 60));

    timer.innerText = `${hours}:${minutes}:${seconds}`;
}


setInterval(function(){
    getTimeInterval(USER_ID);
}, 1000);
