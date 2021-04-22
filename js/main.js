const username = document.querySelector('#ProfilUsername')
const revenue = document.querySelector('#MainRevenue')
const Total = document.querySelector('#MainTotal')
const prImg = document.querySelector(".ic img")
const gImgPr = document.querySelector(".sec img")
// console.log(revenue);
var id = window.localStorage.getItem('id') ? window.localStorage.getItem('id') : null


if (id) {
    username ? fetch(`http://localhost/backend/api/UserById.php?user_id=${id}`).then(response => response.json()).then(data => {
        username.innerHTML = data.NAME
        console.log(`http://localhost/backend/uploads/${data.profile_img}`);
        prImg?prImg.setAttribute('src' , `http://localhost/backend/uploads/${data.profile_img}`):null
        gImgPr?gImgPr.setAttribute('src' , `http://localhost/backend/uploads/${data.profile_img}`):null
    }) : null

    revenue ? fetch(`http://localhost/backend/api/sales/today.php?user_id=${id}`).then(response => response.json()).then(data => {

        revenue.innerHTML = data.revenue + " $"
        Total.innerHTML = data.total_sales + " Item"
    }) : null



}

function logOut() {

    window.localStorage.removeItem('id')
    location.pathname = "login.html"
}



//get top 3 sellers 


const TopSellers = document.querySelector('#TopSellers')
fetch('http://localhost/backend/api/sales/allTodaySales.php').then(response => response.json()).then(data => {
    const reData = data.data.reverse()

    reData.forEach((elm,idx) => {
        if (idx <  3) {
            fetch(`http://localhost/backend/api/UserById.php?user_id=${elm.user_id}`)
                .then(response => response.json())
                .then(user => {
                    const tr = document.createElement('tr')
                    tr.innerHTML = `<tr>
                                    <td>#${idx + 1}</td>
                                    <td>
                                        <div><img src="img/S1.png" alt="img">${user.NAME}</div>
                                    </td>
                                    <td>${elm.total_sales}</td>
                                    <td>${elm.revenue} $</td>
                                </tr>`
                                TopSellers && TopSellers.appendChild(tr)
                })
            }
        }) 
})

