<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal</title>
    <link rel="icon" href="img/portal2.png" type="image/x-icon">
  
    <?php include 'header.php'; ?>
</head>
<body>
    <div class="header">
        <!--Content before waves-->
        <div class="inner-header flex">
            <!--Just the logo.. Don't mind this-->
            <svg version="1.1" class="logo" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" xml:space="preserve">
                <path fill="#FFFFFF" stroke="#000000" stroke-width="10" stroke-miterlimit="10" d="M57,283" />
            </svg>
            <div>
                <img src="img/roberts2.png" alt="Logo Image" style="width: 400px; padding-top: 50px;">
            </div>
        </div>
        <!--Waves Container-->
        <div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(0, 255, 0, 0.7)" /> <!-- Keep this green wave with some opacity -->
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(47, 252, 3, 0.8)" /> <!-- Make the other waves transparent -->
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="rgba(123, 255, 163, 0.8)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(61, 207, 105, 0.8)" />
                </g>
            </svg>
        </div>
        <!--Header ends-->
    </div>

    <!--Content starts-->
    <div class="container" id="content">
        <!-- Content will be dynamically loaded here -->
    </div>

    <!-- Pagination links -->
    <div class="pagination" id="pagination">
        <!-- Pagination links will be generated here -->
    </div>

    <footer>
        <div class="container text-center">
            <p>&copy; Roberts AIPMC 1993</p>
        </div>
    </footer>

    <script>
        // Sample data for demonstration
        const data = [
            { href: "/rem", imgSrc: "img/rem.png", alt: "Employee Master List", title: "Emp. Master List" },
            { href: "/forms", imgSrc: "img/icons8-leave-96.png", alt: "E-Leave", title: "E-Leave" },
            { href: "/EPESystem", imgSrc: "img/epesystem.png", alt: "Employee Performance Evaluation System", title: "Emp. Performance Eval." },
            { href: "/pay", imgSrc: "img/icons8-payroll-96.png", alt: "Roberts ₱ayroll System", title: "Roberts ₱ayroll System" },
            { href: "/dms", imgSrc: "img/discipline.jpg", alt: "HR Discipline Management System", title: "HR Discipline Mgmt." },
            { href: "/jcdms", imgSrc: "img/logo_jcdms.png", title: "Jobcon D. Mgmt." },
            { href: "/hrd1", imgSrc: "img/hr.png", alt: "HR System", title: "HR System" },
            { href: "https://10.0.6.2/mr", imgSrc: "img/logo_mpr.png", title: "Manpower Request" },
            { href: "/jobcon", imgSrc: "img/icons8-payroll-64.png", alt: "Jobcon", title: "Jobcon ₱ayroll" },
            { href: "/eims/hris/login.php", imgSrc: "img/noimage.png", alt: "HRIS", title: "HRIS" },
            { href: "/PolicyDatabase", imgSrc: "img/POLICY.png", alt: "Policy", title: "Policy Database" },
            { href: "/security", imgSrc: "img/Security.png", alt: "Security", title: "Security" },
            { href: "http://10.0.6.5/WorkLog/login.php", imgSrc: "img/noimage.png", alt: "WorkLog", title: "WorkLog" }
            
        ];

        const itemsPerPage = 14; // Number of items per page
        let currentPage = 1; // Current page

        function displayItems(page) {
            const contentContainer = document.getElementById('content');
            contentContainer.innerHTML = ''; // Clear previous content

            const startIndex = (page - 1) * itemsPerPage;
            const endIndex = startIndex + itemsPerPage;
            const itemsToShow = data.slice(startIndex, endIndex);

            itemsToShow.forEach(item => {
                const box = document.createElement('div');
                box.classList.add('box');

                const link = document.createElement('a');
                link.href = item.href;
                link.target = "_blank"; 

                const img = document.createElement('img');
                img.src = item.imgSrc;
                img.alt = item.alt;

                const span = document.createElement('span');
                span.textContent = item.title;

                link.appendChild(img);
                link.appendChild(span);
                box.appendChild(link);
                contentContainer.appendChild(box);
            });
        }

        function generatePaginationLinks() {
            const totalPages = Math.ceil(data.length / itemsPerPage);
            const paginationContainer = document.getElementById('pagination');
            paginationContainer.innerHTML = ''; // Clear previous pagination

            for (let i = 1; i <= totalPages; i++) {
                const link = document.createElement('a');
                link.href = '#';
                link.textContent = i;
                if (i === currentPage) {
                    link.classList.add('active');
                }
                link.onclick = function() {
                    currentPage = i;
                    displayItems(currentPage);
                    highlightActiveLink();
                };
                paginationContainer.appendChild(link);
            }
        }

        function highlightActiveLink() {
            const paginationLinks = document.querySelectorAll('.pagination a');
            paginationLinks.forEach(link => {
                link.classList.remove('active');
                if (parseInt(link.textContent) === currentPage) {
                    link.classList.add('active');
                }
            });
        }

        // Initial setup
        displayItems(currentPage);
        generatePaginationLinks();
    </script>
</body>
</html>
<style>
    html, body {
    height: 100%;
    margin: 0;
}

body {
    display: flex;
    flex-direction: column;
}

footer {
    margin-top: auto;
}

</style>