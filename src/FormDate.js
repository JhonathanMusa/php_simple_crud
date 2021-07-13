import TableContainer from "@material-ui/core/TableContainer";
import Table from "@material-ui/core/Table";
import TableHead from "@material-ui/core/TableHead";
import TableBody from "@material-ui/core/TableBody";
import TableRow from "@material-ui/core/TableRow";
import TableCell from "@material-ui/core/TableCell";
import styles from "./FormDate.module.css";
import { useEffect, useState } from "react";

export const FormDate = (props) => {
  const { data } = props;
  const [date, setDate] = useState([]);
  const [filterDate, setFilterDate] = useState("");
  const [newDate, setNewDate] = useState([]);

  useEffect(() => {
    setDate(data);
  }, [data]);

  const filterDateAction = (e) => {
    e.preventDefault();
    const newArr = date.filter((d) => d.date === filterDate);
    setNewDate(filterDate === "" ? date : newArr);
  };

  return (
    <div className={styles.MainContainer}>
      <form onSubmit={filterDateAction}>
        <div className={styles.FormContainer}>
          <label htmlFor="meeting">Meeting Date: </label>
          <input
            className={styles.InputDate}
            defaultValue="2019-03-20"
            type="date"
            onChange={(e) => setFilterDate(e.target.value)}
          />
          <button className={styles.BtnFilter}>Filter</button>
        </div>
      </form>
      <TableContainer >
        <Table className={styles.TableWith} aria-label="simple table">
          <TableHead>
            <TableRow>
              <TableCell>Date:</TableCell>
              <TableCell align="right">Title:</TableCell>
              <TableCell align="right">Description:</TableCell>
              <TableCell align="right">Amount:</TableCell>
              <TableCell align="right">Total:</TableCell>
            </TableRow>
          </TableHead>
          <TableBody>
            {newDate.map((d) => (
              <TableRow key={d.id}>
                <TableCell align="left">{d.date}</TableCell>
                <TableCell align="right">{d.title}</TableCell>
                <TableCell align="right">{d.description}</TableCell>
                <TableCell align="right">{d.amount}</TableCell>
                <TableCell align="right">{d.total}</TableCell>
              </TableRow>
            ))}
          </TableBody>
        </Table>
      </TableContainer>
    </div>
  );
};
