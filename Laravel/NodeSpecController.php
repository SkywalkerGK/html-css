        if(empty($chk_node)){
            $node = HardwareSpec::create([
                'hw_type' => $hw_spec_group[0],
                'node' => $request->node,
                'node_ip' => $request->node_ip,
                'brand' => $hw_brand_group[0],
                'model' => $hw_brand_group[1],
                'version' => $request->version,
                'qty_slot' => $request->qty_slot,
                'qty_port' => $request->qty_port,
                'location' => $location_group[1],
                'location_code' => $location_group[0],
                'rack' => $request->rack,
                'rank' => $request->rank,
                'property_no' => $request->prop_no,
                'serial_no' => $request->serial_no,
                'dest_group' => $hw_spec_group[1],
                'sub_group' => 0,
                'sub_group2' => 0,
                'sub_group3' => 0,
                'hw_status' => $request->hw_status,
                'remark' => $request->remark,
                'start_date' => $request->start_service_date != '' ? date('Y-m-d', strtotime($request->start_service_date)) : null,
                'end_date' => $request->end_service_date != '' ? date('Y-m-d', strtotime($request->end_service_date)) : null,
                'country' => $request->country,
                'u_start' => $request->u_start,
                'u_end' => $u_end,
                'owner_id' => $request->owner,
                'start_ma_date' => $request->start_ma_date != '' ? date('Y-m-d', strtotime($request->start_ma_date)) : null,
                'end_ma_date' => $request->start_ma_date != '' ? date('Y-m-d', strtotime($request->end_ma_date)) : null,
                'phase' => $phase,
                'iso_status' => $request->iso_status,
                'date_update' => date('Y-m-d H:i:s'),
            ]);

            if($node){
                return redirect()->back()->with('swal-success', 'บันทึกข้อมูลสำเร็จ');
            }else{
                return redirect()->back()->with('swal-error', 'บันทึกข้อมูลไม่สำเร็จ กรุณาลองใหม่อีกครั้ง');
            }
        }else{
            return redirect()->back()->with('swal-error', 'ข้อมูลซ้ำ กรุณาบันทึกใหม่อีกครั้ง');
        }
    }
