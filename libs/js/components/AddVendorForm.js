var React = window.React ? window.React : require('react');

var AddVendorForm = React.createClass({
  getInitialState: function(){
    return {value: "", checked: []};
  },
  handleClick: function(){
    let checkedJson = JSON.stringify(this.state.checked);
    let postData = '{"name":'+'"'+this.state.value+'","services":'+checkedJson+'}';
    let posted = $.post("http://eventhives.com/admin/add-vendor",{data: postData});
    posted.done(alert('Done'));
  },
  handleNameChange: function(event){
    this.setState({value: event.target.value});
  },
  handleServiceChange(event) {
    let val = event.target.value;
    let checked = this.state.checked.slice(); // copy
    if(checked.includes(val)) {
      checked.splice(checked.indexOf(val), 1);
    } else {
      checked.push(val);
    }
    this.setState({checked: checked})
  },
  render: function() {
    return (
      <div className="content-wrapper">
                    <section className="content-header">
                      <h1>
                        Add Vendor
                      </h1>
                      <ol className="breadcrumb">
                        <li><a href="/admin"><i className="fa fa-dashboard"></i> Home</a></li>
                        <li className="active">Add Vendor</li>
                      </ol>
                    </section>
                    <section className="content">
                      <div className="box box-primary">
                        <div className="box-header with-border">
                          <h3 className="box-title">Provide the details of Vendor</h3>
                        </div>

                        <div role="form">
                          <div className="box-body">
                            <div className="form-group">
                              <label htmlfor="vendor_name">Vendor Name</label>
                              <input name="name" onChange={(e) => this.handleNameChange(e)} value={this.state.value} type="text" className="form-control" id="vendor_name" placeholder="Enter Vendor Name" />
                            </div>
                            <div className="checkbox">
                              <label>
                                <input name="services[]" value="venue provider" type="checkbox" onChange={(e) => this.handleServiceChange(e)} /> Venue Provider
                              </label>
                            </div>
                            <div className="checkbox">
                              <label>
                                <input name="services[]" value="caterer" type="checkbox" onChange={(e) => this.handleServiceChange(e)} /> Caterer
                              </label>
                            </div>
                            <div className="checkbox">
                              <label>
                                <input name="services[]" value="decorator" type="checkbox" onChange={(e) => this.handleServiceChange(e)} /> Decorator
                              </label>
                            </div>
                            <div className="checkbox">
                              <label>
                                <input name="services[]" value="digital service provider" type="checkbox" onChange={(e) => this.handleServiceChange(e)} /> Digital Service Provider
                              </label>
                            </div>
                          </div>

                          <div className="box-footer">
                            <button onClick={(e) => this.handleClick(e)} className="btn btn-primary">Submit</button>
                          </div>
                        </div>
                      </div>
                    </section>
                  </div>
    );
  }
});
if (typeof module != 'undefined') {
  module.exports = AddVendorForm;
} else {
  window.AddVendorForm = AddVendorForm;
}
