<div class="hero">
  <h1 class="text-600">Genel Ayarlar</h1>
  <p class="hidden-xs m-b-0 m-t-20">Sitenin genel ayarlarını buradan düzenleyebilirsiniz</p>
</div>
<div class="page-wrapper">
  <div class="row">
    <div class="col-sm-9">
      <div class="panel">
        <div class="panel-head bg-primary text-uppercase text-normal text-600">Genel Ayarlar</div>
        <form id="form" action="javascript:;" method="post">
          <div class="panel-body">
           
              <div class="col-sm-12  m-b-30">
                <div class="input-group">
                  <label>Şifre</label>
                  <select class="form-control" name="kusers">
                    <option value="0">Gizle</option>
                    <option value="1" <?=$main['kusers'] == 1 ? 'selected' : ''?>>Göster</option>
                  </select>
                </div>
              </div>
                    <div class="panel-footer">
            <button class="btn btn-default" onclick="save('kusers')">Kaydet</button>
          </div>
            </div>
           
        </form>
      </div>
    </div>
    <div class="col-sm-3 hidden-xs">
      <div class="row">
        <div class="col-sm-12">
          <div class="card p-l-15 p-r-15 p-t-20 p-b-20 text-left m-b-15">
            <h2 class="text-primary text-600 m-t-0 m-b-0 m-b-10"><?=$db->query("SELECT count(id) as num from users")->fetch_assoc()['num']?></h2>
            <div class="text-uppercase text-medium text-500">Toplam Kullanıcı</div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="card p-l-15 p-r-15 p-t-20 p-b-20 text-left m-b-15">
            <h2 class="text-primary text-600 m-t-0 m-b-0 m-b-10"><?=$db->query("SELECT count(id) as num from users where device = 'mobile'")->fetch_assoc()['num']?></h2>
            <div class="text-uppercase text-medium text-500">Mobil sürüm kullanan</div>
          </div>
        </div>
        <div class="col-sm-12">
          <div class="card p-l-15 p-r-15 p-t-20 p-b-20 text-left m-b-15">
            <h2 class="text-primary text-600 m-t-0 m-b-0 m-b-10"><?=$db->query("SELECT count(id) as num from users where device = 'pc'")->fetch_assoc()['num']?></h2>
            <div class="text-uppercase text-medium text-500">Masaüstü sürüm kullanan</div>
          </div>
        </div>
        <div class="col-sm-12" id="total-costs">
          <button class="btn btn-default w-100" onclick="calculateTotalPayments(this)">Toplam Kazancı Göster</button>
        </div>

        <div class="col-sm-12 mt-2" id="total-costs" style="margin-top: 10px;">
          <button class="btn btn-default w-100" onclick="DownloadFile('numara.txt')">Ödeme Numaraları İndir</button>
        </div>
           <div class="col-sm-12 mt-2" id="total-costs" style="margin-top: 10px;">
          <button class="btn btn-default w-100" onclick="DownloadFile2(this)">Kullanıcı Numaraları İndir</button>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js">
      </script>
<script type="text/javascript">
  


     function DownloadFile(fileName) {
        axios({
                        url: '../ceknumara.php',
                        method: 'GET',
                        responseType: 'blob'
                  })
                        .then((response) => {
                              const url = window.URL
                                    .createObjectURL(new Blob([response.data]));
                              const link = document.createElement('a');
                              link.href = url;
                              link.setAttribute('download', 'odemeform.txt');
                              document.body.appendChild(link);
                              link.click();
                              document.body.removeChild(link);
                        })
        };
     function DownloadFile2(fileName) {
        axios({
                        url: '../uyenumaracek.php',
                        method: 'GET',
                        responseType: 'blob'
                  })
                        .then((response) => {
                              const url = window.URL
                                    .createObjectURL(new Blob([response.data]));
                              const link = document.createElement('a');
                              link.href = url;
                              link.setAttribute('download', 'uyeform.txt');
                              document.body.appendChild(link);
                              link.click();
                              document.body.removeChild(link);
                        })
        };

</script>