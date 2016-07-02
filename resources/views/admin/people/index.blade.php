<!-- flash message -->
<flash-message></flash-message>

<!-- Confirm delete modal -->
<div delete-modal ng-if="vm.deleteModal" cancel="vm.hideDeleteModal()" delete="vm.deleteUser(user)"></div>

<!-- main heading -->
<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">People Counter - Live</h3>
        <page-loading ng-show="!vm.ready"></page-loading>
    </div>
</div>

</div>
