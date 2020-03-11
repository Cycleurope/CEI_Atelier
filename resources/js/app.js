/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
var Masonry = require( 'masonry-layout' );

$(document).ready(function() {

  $.ajaxSetup({
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
  });

  if ($( "#chart-requests-pending-inreview" ).length) {
    Morris.Donut({
      element: 'chart-requests-pending-inreview',
      data: [
        {label: "En attente", value: 34},
        {label: "En cours de traitement", value: 27},
      ],
      colors: [
        '#6631db',
        '#03a5e5',
      ]
    });
  }
  if ($( "#chart-requests-closed-refused" ).length) {
    Morris.Donut({
      element: 'chart-requests-closed-refused',
      data: [
        {label: "Cloturées", value: 78},
        {label: "Refusées", value: 22},
      ],
      colors: [
        '#3adb54',
        '#ed423e'
      ]
    });
  }
  
  if ($( "#chart-last-requests" ).length) {
    Morris.Bar({
      element: 'chart-last-requests',
      data: [
        { y: 'Mai 2019', a: 271, b: 90 },
        { y: 'Juin 2019', a: 224, b: 90 },
        { y: 'Juillet 2019', a: 354, b: 90 },
        { y: 'Aout 2019', a: 322, b: 90 },
        { y: 'Septembre 2019', a: 297,  b: 65 },
        { y: 'Octobre 2019', a: 285,  b: 40 },
        { y: 'Novembre 2019', a: 301,  b: 65 },
        { y: 'Décembre 2019', a: 316,  b: 40 },
        { y: 'Janvier 2020', a: 268,  b: 65 },
        { y: 'Février 2020', a: 284, b: 90 }
      ],
      xkey: 'y',
      ykeys: ['a'],
      labels: ['Demandes']
    });
  }

  // Formulaires

  var quill_masterclass_program = new Quill('#quill-masterclass-program', {theme: 'snow'});
  var quill_masterclass_info = new Quill('#quill-masterclass-info', {theme: 'snow'});
  var quill = new Quill('#quill-answer', {theme: 'snow'});

  $("#form-masterclass").submit(function() {
    $("#input-masterclass-program").val(quill_masterclass_program.container.firstChild.innerHTML);
    $("#input-masterclass-info").val(quill_masterclass_info.container.firstChild.innerHTML);
  });

  $("#form-question").submit(function() {
    $("#input-answer").val(quill.container.firstChild.innerHTML);
  });

  $("#faq-sortable").sortable({
    axis: 'y',
    update: function(event, ui) {
      var data = $(this).sortable('serialize');
      console.log(data);
      $.ajax({
        data: data,
        type: 'POST',
        url: '/admin/faq/sort',
        success:function(data) {
          console.log(data);
        }
      });
    }
  });

  $("#weblinks-sortable").sortable({
    axis: 'y',
    update: function(event, ui) {
      var data = $(this).sortable('serialize');
      console.log(data);
      $.ajax({
        data: data,
        type: 'POST',
        url: '/admin/weblinks/sort',
        success:function(data) {
          console.log(data);
        }
      });
    }
  });




  // SweetAlerts

  $("#form-question-delete").submit(function(e) {
    e.preventDefault();
    Swal.fire({
      title: 'Voulez-vous vraiment supprimer cette question ?',
      text: "Cette opération est irréversible.",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#ff0059',
      confirmButtonText: 'Confirmer la suppression.',
      cancelButtonText: 'Annuler',
    }).then((result) => {
      if (result.value) {
        Swal.fire('Et voilà !', 'La question a été supprimée.', 'success');
        $(this).unbind('submit').submit();
      }
    })
  });

  $("#form-brand-delete").submit(function(e) {
    e.preventDefault();
    Swal.fire({
      title: 'Voulez-vous vraiment supprimer cette marque ?',
      text: "Cette opération est irréversible et supprimera tous ses éléments attachés (produits, documents, etc ...).",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#ff0059',
      confirmButtonText: 'Confirmer la suppression.',
      cancelButtonText: 'Annuler',
    }).then((result) => {
      if (result.value) {
        Swal.fire('Et voilà !', 'La marque a été supprimée.', 'success');
        $(this).unbind('submit').submit();
      }
    })
  });

  $("#form-masterclass-delete").submit(function(e) {
    e.preventDefault();
    Swal.fire({
      title: 'Voulez-vous vraiment supprimer cette formation ?',
      text: "Cette opération est irréversible.",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#ff0059',
      confirmButtonText: 'Confirmer la suppression.',
      cancelButtonText: 'Annuler',
    }).then((result) => {
      if (result.value) {
        Swal.fire('Et voilà !', 'La formation a été supprimée.', 'success');
        $(this).unbind('submit').submit();
      }
    })
  });

  $("#form-phonecard-delete").submit(function(e) {
    e.preventDefault();
    Swal.fire({
      title: 'Voulez-vous vraiment supprimer cette carte ?',
      text: "Cette opération est irréversible.",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#ff0059',
      confirmButtonText: 'Confirmer la suppression.',
      cancelButtonText: 'Annuler',
    }).then((result) => {
      if (result.value) {
        Swal.fire('Et voilà !', 'La carte a été supprimée.', 'success');
        $(this).unbind('submit').submit();
      }
    })
  });

  $("#form-document-delete").submit(function(e) {
    e.preventDefault();
    Swal.fire({
      title: 'Voulez-vous vraiment supprimer ce document ?',
      text: "Cette opération est irréversible.",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#ff0059',
      confirmButtonText: 'Confirmer la suppression.',
      cancelButtonText: 'Annuler',
    }).then((result) => {
      if (result.value) {
        Swal.fire('Et voilà !', 'Le document a été supprimé.', 'success');
        $(this).unbind('submit').submit();
      }
    })
  });

  $("#form-product-delete").submit(function(e) {
    e.preventDefault();
    Swal.fire({
      title: 'Voulez-vous vraiment supprimer ce produit ?',
      text: "Cette opération est irréversible.",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#ff0059',
      confirmButtonText: 'Confirmer la suppression.',
      cancelButtonText: 'Annuler',
    }).then((result) => {
      if (result.value) {
        Swal.fire('Et voilà !', 'Le produit a été supprimé.', 'success');
        $(this).unbind('submit').submit();
      }
    })
  });

  $("#form-video-delete").submit(function(e) {
    e.preventDefault();
    Swal.fire({
      title: 'Voulez-vous vraiment supprimer cette vidéo ?',
      text: "Cette opération est irréversible.",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#ff0059',
      confirmButtonText: 'Confirmer la suppression.',
      cancelButtonText: 'Annuler',
    }).then((result) => {
      if (result.value) {
        Swal.fire('Et voilà !', 'La vidéo a été supprimée.', 'success');
        $(this).unbind('submit').submit();
      }
    })
  });

  $("#form-m3pin-import").submit(function(e) {
    e.preventDefault();
    $('#alert-m3pin-import').removeClass('d-none').hide().fadeIn('fast', function() {
      $("#form-m3pin-import").unbind('submit').submit();
    });
  });


  // documents
  var grid = document.querySelector('#documents-grid');
  var msnry = new Masonry( grid, {
    // options...
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
  });


});