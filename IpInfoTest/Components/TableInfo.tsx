import React, { Component } from 'react';
import HubletoTable, { HubletoTableProps, HubletoTableState } from '@hubleto/react-ui/ext/HubletoTable';
import request from '@hubleto/react-ui/core/Request';
import axios from 'axios';
import { ProgressBar } from 'primereact/progressbar';
import { FormProps } from '@hubleto/react-ui/core/Form';

interface TableInfoProps extends HubletoTableProps {
  status: string,
  showAsCards?: boolean;
}
//
interface TableInfoState extends HubletoTableState {
  tableValuesDescription?: any,
}

export default class TableInfo extends HubletoTable<TableInfoProps, TableInfoState> {
  static defaultProps = {
    ...HubletoTable.defaultProps,
    formUseModalSimple: true,
    model: 'Hubleto/App/Custom/IpInfoTest/Models/IpInfoModel',
  }

  props: TableInfoProps;
  state: TableInfoState;

  // componentDidMount() {

  // }

  // getFormModalProps() {
  //   return {
  //     ...super.getFormModalProps(),
  //     type: (this.props.??)
  //   }
  // }

  // getFormProps(): any {
  // ??
  // }

  setRecordFormUrl(id: number) {
    window.history.pushState({}, "", globalThis.main.config.projectUrl + '/ipinfotest/' + (id > 0 ? id : 'add'));
  }

  onAfterLoadTableDescription(description: any) {
    request.get(
      'api/table/describe',
      {
        model: 'Hubleto/App/Custom/IpInfoTest/Models/IpInfoModel',
      },
      (description: any) => {
        this.setState({ tableValueDescription: description } as TableInfoState);
      }
    );
    return description;
  }

  // renderCell(columnName: string, column: any, data: any, options: any) {
  //   if ()
  // }

  render(): JSX.Element {
    if (this.props.showAsCards) {
      if (!this.state.data) {
        return <ProgressBar mode="indeterminate" style={{ height: '8px' }}></ProgressBar>;
      }

      return <>
        <div className='flex gap-2'>
          {this.renderHeaderButtons()}
        </div>
        {/* {this.renderFormModal()} */}
        <div className="md:grid md:grid-cols-2 gap-2 mt-2">
          sadasdsa
          {"asadsad"}
        </div>
      </>;
    } else {
      return super.render();
    }
  }


}
