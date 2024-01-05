<div class="container mb-5">
    <?php if (!empty($attendance)): ?>
        <table id="example23" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Employee Name</th>
                    <th>Date</th>
                    <th>Sign In</th>
                    <th>Sign Out</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($attendance as $row): ?>
                    <tr>
                        <td><?php echo $row->employee_name; ?></td>
                        <td><?php echo $row->date; ?></td>
                        <td><?php echo $row->sign_in; ?></td>
                        <td><?php echo $row->sign_out; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No attendance data found.</p>
    <?php endif; ?>
</div>

<?php $this->load->view('backend/footer'); ?>
