import './bootstrap';

import * as bootstrap from 'bootstrap';
import $ from 'jquery';
window.$ = $;

$(document).ready(function() {
    $(document).on("click", ".delete", function(){
        let id = $(this).data("id");
        let url = $(this).data("url")
        if(confirm("Yakin ingin menghapus?")) {
            $.ajax({
                url: url + id,
                type: "DELETE",
                data: {_token: $('meta[name="csrf-token"]').attr('content')},
                success: function(res) {
                    if(res.success) {
                        $("#row-" + id).remove();
                    }
                }
            });
        }
    })

    $(document).on("change", "#hospitalFilter", function(){
        let url = $(this).data("url");
        let hospitalId = $(this).val();
    
        $.ajax({
            url: url,
            type: "GET",
            data: { hospital_id:  hospitalId },
            success: function(data) {
                let rows = '';
                let no = 1;
                if (data.length > 0) {
                    data.forEach(function(patient) {
                        rows += `
                            <tr>
                                <td>${no++}</td>
                                <td>${patient.patient_name}</td>
                                <td>${patient.address}</td>
                                <td>${patient.phone_number}</td>
                                <td>${patient.hospital.hospital_name}</td>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-warning">Edit</a>
                                        <a href="{{ route('patients.show', $patient->id) }}" class="btn btn-info">Detail</a>
                                        <button type="button" data-id="{{ $patient->id }}" class="btn btn-danger delete">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                        `;
                    });
                } else {
                    rows = `<tr><td colspan="6" class="text-center">Tidak ada data pasien</td></tr>`;
                }
                $('#patientsTable').html(rows);
            }
        })
    })
})

