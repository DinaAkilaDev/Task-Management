<div class=" container">
    <div class="d-flex justify-content-between mb-5">
        <h2 class="mt-3">Employer</h2>
    </div>

    <table class="table table-hover table-striped table-bordered">
        <tr class="table-dark py-3 text-center">
            <td>Name</td>
            <td>Email</td>
            <td>Related Tasks</td>
            <td>Report</td>
            <td>Action</td>
        </tr>

        <tr class="text-center">
            <td>hamza zoheir</td>
            <td>hamza@gmail.com</td>
            <td><a href="Car-seller-project.html" class="sho">Show Tasks</a></td>
            <td><button class="Report bg-info text-white" id="show-report-1" onclick="showModal('repo-modal-1')">Show Report</button></td>
            <td>
                <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
            </td>
        </tr>
        <tr class="text-center">
            <td> Ahmed saleh</td>
            <td>Ahmed@gmail.com</td>
            <td><a href="Car-seller-project.html" class="sho">Show Tasks</a></td>
            <td><button class="Report bg-info text-white" id="show-report-2" onclick="showModal('repo-modal-2')">Show Report</button></td>
            <td>
                <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
            </td>
        </tr>
        <tr class="text-center">
            <td>hamza zoheir</td>
            <td>hamza@gmail.com</td>
            <td><a href="Car-seller-project.html" class="sho">Show Tasks</a></td>
            <td><button class="Report bg-info text-white" id="show-report-3" onclick="showModal('repo-modal-3')">Show Report</button></td>
            <td>
                <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
            </td>
        </tr>
        <tr class="text-center">
            <td> Ahmed saleh</td>
            <td>Ahmed@gmail.com</td>
            <td><a href="Car-seller-project.html" class="sho">Show Tasks</a></td>
            <td><button class="Report bg-info text-white" id="show-report-4" onclick="showModal('repo-modal-4')">Show Report</button></td>
            <td>
                <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
            </td>
        </tr>
        <tr class="text-center">
            <td>hamza zoheir</td>
            <td>hamza@gmail.com</td>
            <td><a href="Car-seller-project.html" class="sho">Show Tasks</a></td>
            <td><button class="Report bg-info text-white" id="show-report-5" onclick="showModal('repo-modal-5')">Show Report</button></td>
            <td>
                <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
            </td>
        </tr>
    </table>
</div>

<script>
    for (let i = 1; i < 6; i++) {
        document.addEventListener('click', (event) => {
            let id = 'repo-modal-' + i;
            let report_id = 'show-report-' + i;
            let el = document.getElementById(id);
            let clicked = (event.target.id !== id || event.target.id === report_id);
            if (!clicked) {
                el.classList.remove('Repo')
            }
        })
    }
    for (let i = 1; i < 6; i++) {
        let addModal = document.getElementById('addModal');
        addModal.innerHTML +=
            "<div class=\"meno_table\" id=\"repo-modal-" + i + "\"><div class=\"content\"><h4>Report For Mohammed</h4><hr> \
                <table class=\"table table-hover table-striped table-bordered\"> \
                    <h4>All Project <span class=\"text-info\">10</span></h4>\
                    <tr class=\"table-dark py-3 text-center\">\
                        <td>Completed</td>\
                        <td>In Progress</td>\
                        <td>Canceled</td>\
                    </tr>\
                    <tr class=\"text-center\">\
                        <td>4</td>\
                        <td>4</td>\
                        <td>4</td>\
                    </tr>\
                </table>\
                <table class=\"table table-hover table-striped table-bordered\"> \
                    <h4 >All Tasks <span class=\"text-info\">10</span></h4>\
                    <tr class=\"table-dark py-3 text-center\">\
                        <td>Completed</td>\
                        <td>In Progress</td>\
                        <td>Canceled</td>\
                    </tr>\
                    <tr class=\"text-center\">\
                        <td>4</td>\
                        <td>4</td>\
                        <td>4</td>\
                    </tr>\
                </table>\
                <table class=\"table table-hover table-striped table-bordered\"> \
                    <h4>Sessions <span class=\"text-info\">10</span></h4>\
                    <tr class=\"table-dark py-3 text-center\">\
                        <td>Days</td>\
                        <td>login</td>\
                        <td>logout</td>\
                    </tr>\
                    <tr class=\"text-center\">\
                        <td>4</td>\
                        <td>4</td>\
                        <td>4</td>\
                    </tr>\
                </table>\
            </div>    \
        </div> "
    }
</script>
