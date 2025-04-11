<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Quản Lý Danh Mục</title>
  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">

  <div class="container">
    <div class="card shadow-sm mx-auto" style="max-width: 600px;">
      <div class="card-body">
        <h2 class="mb-4 text-center text-primary">Quản Lý Danh Mục</h2>

        <div class="mb-3">
          <input type="text" id="categoryInput" class="form-control" placeholder="Nhập tên danh mục...">
        </div>
        <div class="d-grid mb-4">
          <button onclick="addCategory()" class="btn btn-primary">Thêm Danh Mục</button>
        </div>

        <ul id="categoryList" class="list-group">
          <!-- Danh mục được thêm sẽ hiển thị ở đây -->
        </ul>
      </div>
    </div>
  </div>

  <script>
    function addCategory() {
      const input = document.getElementById("categoryInput");
      const value = input.value.trim();

      if (value === "") {
        alert("Vui lòng nhập tên danh mục!");
        return;
      }

      const li = document.createElement("li");
      li.className = "list-group-item d-flex justify-content-between align-items-center";

      const span = document.createElement("span");
      span.textContent = value;

      const btnGroup = document.createElement("div");
      btnGroup.className = "btn-group btn-group-sm";

      const editBtn = document.createElement("button");
      editBtn.className = "btn btn-warning";
      editBtn.textContent = "Sửa";
      editBtn.onclick = function () {
        const newName = prompt("Nhập tên mới cho danh mục:", span.textContent);
        if (newName !== null && newName.trim() !== "") {
          span.textContent = newName.trim();
        }
      };

      const deleteBtn = document.createElement("button");
      deleteBtn.className = "btn btn-danger";
      deleteBtn.textContent = "Xóa";
      deleteBtn.onclick = function () {
        if (confirm("Bạn có chắc muốn xóa danh mục này?")) {
          li.remove();
        }
      };

      btnGroup.appendChild(editBtn);
      btnGroup.appendChild(deleteBtn);
      li.appendChild(span);
      li.appendChild(btnGroup);

      document.getElementById("categoryList").appendChild(li);
      input.value = "";
    }
  </script>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
