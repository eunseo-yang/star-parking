import React from "react";
import Head from "next/head";
import Logo from "../components/atoms/logo.jsx";
import styled, { css } from "styled-components";
import LogInForm from "../components/molecules/log-in/LogIn";
import Text from "../components/atoms/Text";

export default function LogIn() {
  return (
    <Wrapper>
      <Head>
        <title>Login</title>
      </Head>
      <Logo style={{ width: "20rem", height: "20rem" }} fill="#333"></Logo>
      <Text level="5">별별 주차장</Text>
      <LogInForm></LogInForm>
    </Wrapper>
  );
}

const Wrapper = styled.div`
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
  padding-bottom: 15%;
`;
