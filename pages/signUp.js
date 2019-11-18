import React from "react";
import Head from "next/head";
import Logo from "../components/atoms/logo.jsx";
import styled, { css } from "styled-components";

export default function SignUp() {
  return (
    <Wrapper>
      <Head>
        <title>Sign Up</title>
      </Head>
      회원가입 페이지
    </Wrapper>
  );
}

const Wrapper = styled.div`
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
`;
