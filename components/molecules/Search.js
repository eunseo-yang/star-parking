import React from "react";
import Link from "next/link";
import styled, { css } from "styled-components";
import SearchIcon from "../atoms/Button/Icon/search.jsx";

export default function SearchForm() {
  return (
    <Form>
      <Input type="text" name="keyword" placeholder="지역을 검색하세요"></Input>
      <Link href="index">
        <Button type="submit">
          <a>
            <SearchIcon
              style={{ width: "2rem", height: "2rem " }}
              fill="#333"
            ></SearchIcon>
          </a>
        </Button>
      </Link>
    </Form>
  );
}

const Form = styled.form`
  display: flex;
  align-items: center;
  width: 100%;
  justify-content: center;
  margin: 0 auto 0 auto;
`;

const Input = styled.input`
  width: 100%;
  height: 4rem;
  font-size: 1.5rem;
  border: 0.5rem solid #f68657;
  background-color: white;
  padding: 0 1.6rem;
  box-sizing: border-box;
`;
const Button = styled.button`
  width: 2.4rem;
  height: 2.4rem;
  object-fit: contain;
  position: absolute;
  right: 2rem;
  border: none;
  background-color: transparent;
`;
