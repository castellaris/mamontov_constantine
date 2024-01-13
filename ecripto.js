const btn = document.getElementById('button');

document.getElementById('form')
 .addEventListener('submit', function(event) {
   event.preventDefault();

   btn.value = 'Отправляется...';

   const serviceID = 'default_service';
   const templateID = 'template_l16yv5w';

   emailjs.sendForm(serviceID, templateID, this)
    .then(() => {
      btn.value = 'Отправить сообщение';
      alert('Sent!');
    }, (err) => {
      btn.value = 'Отправить сообщение';
      alert(JSON.stringify(err));
    });
});
