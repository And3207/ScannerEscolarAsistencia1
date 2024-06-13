const searchgrup = document.querySelector('.selectbox'),
    table_rowsgrup = document.querySelectorAll('tbody tr'),
    table_headingsgrup = document.querySelectorAll('thead th');

// 1. Searching for specific data of HTML table
searchgrup.addEventListener('select', searchTable);

function searchTable() {
    table_rowsgrup.forEach((row, i) => {
        let table_data = row.textContent.toLowerCase(),
            search_data = searchgrup.value.toLowerCase();

        row.classList.toggle('hide', table_data.indexOf(search_data) < 0);
        row.style.setProperty('--delay', i / 25 + 's');
    })

    document.querySelectorAll('tbody tr:not(.hide)').forEach((visible_row, i) => {
        visible_row.style.backgroundColor = (i % 2 == 0) ? 'transparent' : '#0000000b';
    });
}
