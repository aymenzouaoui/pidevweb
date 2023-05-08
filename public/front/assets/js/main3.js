window.onload = () => {

    const ReservationForm = document.querySelector("#reservation-form"); 
    const dateDebInput = document.querySelector(".reservation-datedeb");
    const dateFinInput = document.querySelector(".reservation-datefin");

    const updatePrixElement = () => {
        const dateDebValue = dateDebInput.value;
        const dateFinValue = dateFinInput.value;

        if (dateDebValue && dateFinValue) {
            const dateDeb = new Date(dateDebValue);
            const dateFin = new Date(dateFinValue);

            const diffTime = Math.abs(dateFin - dateDeb);
            const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

            var prixElement = document.querySelector('.js-prix');
            const prix = prixElement.getAttribute('data-prix');
            if(dateDebValue == dateFinValue)
                 prixElement.textContent = parseFloat(prix) + "dt";
            else
                prixElement.textContent = parseFloat(prix) * (diffDays+1) + "dt";
        }
    }

    dateFinInput.addEventListener("change", updatePrixElement);

    dateDebInput.addEventListener("change", updatePrixElement);
    
    let calendarElt = document.querySelector("#calendrier")
    let calendar = new FullCalendar.Calendar(calendarElt, {
        initialView: 'dayGridMonth',

        events: '{{ data|json_encode|raw }}',
    })
    calendar.on('eventChange', (e) => {
        let url = `/api/${e.event.id}/edit`
        let donnees = {
            "description": e.event.extendedProps.description,
            "start": e.event.start,
            "end": e.event.end,
            "backgroundColor": e.event.backgroundColor,
            "borderColor": e.event.borderColor,
            "textColor": e.event.textColor,
            "allDay": e.event.allDay
        }
        
        let xhr = new XMLHttpRequest
        xhr.open("PUT", url)
        xhr.send(JSON.stringify(donnees))
    })
    calendar.render()

};
