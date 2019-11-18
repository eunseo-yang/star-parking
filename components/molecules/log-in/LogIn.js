import React from "react";
import styled, { css } from "styled-components";
import Input from "../../atoms/log-in/Input";
import Button from "../../atoms/log-in/Button";
import Link from "next/link";

export default function LogIn() {
  return (
    <>
      <Form>
        <Input type="email" placeholder="ID"></Input>
        <Input type="password" placeholder="Password"></Input>
        <Button type="submit">로그인</Button>
      </Form>
      <Link href="signUp">
        <a>
          <Button>회원가입</Button>
        </a>
      </Link>
    </>
  );
}

const Form = styled.form`
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
`;
