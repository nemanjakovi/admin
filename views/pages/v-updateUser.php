<div class="modal fade" id="updateUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="add-user-form" method="POST" action="crud.php">
                <div class="modal-body">


                    <input type="hidden" name="u_id" id="u_id" class="form-control">


                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" require placeholder="Enter book Title">
                    </div>

                    <div class="form-group">
                        <label for="LastName">Last Name</label>
                        <input type="text" name="last_name" id="last_name" class="form-control" require placeholder="Enter book writer">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="date">Date</label>
                            <input type="date" class="form-control" name="date" id="date" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio" id="radio" value="Male" id="male">
                        <label class="form-check-label" for="male" id="male">
                            Male
                        </label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="radio" id="radio" value="Female" id="female">
                        <label class="form-check-label" for="female">
                            Female
                        </label>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="update_user" class="btn btn-primary" data-bs-dismiss="modal" id="add-user-btn">Update User</button>
                    </div>
            </form>
        </div>
    </div>
</div>