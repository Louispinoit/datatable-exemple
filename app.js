$("#table").DataTable({
  //method for the request
  processing: true,
  serverSide: true,
  ajax: {
    type: "post",
    url: "/model/json-receive.php",
  },

  // render my table
  columns: [
    { data: "id" },
    { data: "personnage_nom" },
    {
      data: "image",
      render: function (data, type, row) {
        return '<img src ="assets/images/' + data + '"/>';
      },
    },
    { data: "description" },
  ],
});
