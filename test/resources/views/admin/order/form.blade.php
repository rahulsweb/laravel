
 <div class="form-group {{ $errors->has('roles') ? 'has-error' : ''}}">
      <strong>Payment Status</strong>
                  <select class="form-control" name="status">
                      
                        <option value="{{ $orders->orderPayment[0]->status }}">{{ isset($orders->orderPayment[0]->status) ? $orders->orderPayment[0]->status : 'Select Status' }}</option>
                      
                   
                     
                      <option value="Pending">Pending</option>
                      <option value="Processing">Processing</option>
                      <option value="Dispatch">Dispatch</option>
                      <option value="Shipping">Shipping</option>
                      <option value="Delivered">Delivered</option>
     
                    
                    
                  </select>
                 {!! $errors->first('roles', '<p class="help-block">:message</p>') !!}
                </div>
<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
