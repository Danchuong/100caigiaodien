# Index — Refero Style

- Refero URL: https://styles.refero.design/style/b1ec2120-ceb0-42d1-9f96-2c9db2bf009b
- Site URL: https://index-space.org
- ID: b1ec2120-ceb0-42d1-9f96-2c9db2bf009b
- Theme: light
- Industry: agency
- Created: 2026-04-30T03:32:44.084Z
- Ranks: newest: 127, popular: 1149, trending: 1125

> monochrome academic journal

## Description

Index employs a stark, high-contrast visual identity, reminiscent of avant-garde print media. The design prioritizes typography, using a mix of serif, sans-serif, and condensed styles to convey distinct content hierarchy against a largely achromatic canvas. Interactivity is highlighted through simple border treatments and monochromatic fills, with navigation elements often appearing as outlined or inverted states rather than distinct chromatic accents. Layouts are content-centered, favoring clear segmentation and generous vertical spacing to emphasize textual information.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| White Canvas | #ffffff | neutral | Page backgrounds, card surfaces, ghost button backgrounds, default text for dark surfaces |
| Ink Black | #000000 | neutral | Primary text, surface backgrounds, button fills, borders, navigation elements. Defines the core high-contrast aesthetic |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| ABCDiatypeLight | Arial | 300, 400 | 12px, 16px, 24px, 30px, 50px, 56px, 80px | 0.90, 1.10, 1.20, 1.25 | Headings, descriptive sub-text, navigation items, interactive elements. Its light weight adds a contemporary and airy feel, contrasting with the bold visual identity. |
| Times New Roman | Times New Roman | 400 | 16px | 1.20 | Body text, annotations, standard interface labels. Provides a classic, legible base for long-form content. |
| ITCGaramondStdLtCond | Georgia | 300, 400 | 20px, 24px, 40px, 50px, 75px | 1.00, 1.05, 1.20, 2.10 | Prominent headings and section titles. Its condensed nature creates a striking, editorial aesthetic, demanding attention through form rather than size alone. |
| IndexLogotype | Verdana | 300 | 50px | 0.90 | Brand logo in navigation. A unique and custom font used sparingly to reinforce brand identity. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.25 | 0.096 |
| body | 16 | 1.2 |  |
| subheading | 24 | 1.2 | -0.216 |
| heading | 40 | 1 | -0.88 |
| heading-lg | 56 | 1.1 | -1.512 |
| display | 80 | 0.9 | -2.96 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "16px",
    "pills": "100px",
    "buttons": "0px",
    "default": "6px"
  },
  "elementGap": "8px",
  "sectionGap": "40px",
  "cardPadding": "20px",
  "pageMaxWidth": "520px"
}
```

## Components

### Filled Primary Button

**Role:** Call to action, critical navigation.

Solid Ink Black background with White Canvas text. Features 0px border-radius, 20px padding on all sides. Used for prominent, affirmative actions.

### Ghost Border Button

**Role:** Secondary actions, emphasis on linked text.

Transparent background with Ink Black text and 1px Ink Black border. No padding, designed for inline text-like integration. Appears text-only at specific instances. Rectangular, 0px border-radius.

### Pill Outline Button

**Role:** Tagging, category filters.

Ink Black text and 1px Ink Black border on a White Canvas background. Features 100px border-radius, creating a pill shape. Very minimal padding (e.g., 0px vertical, 20px horizontal).

### Navigation Link

**Role:** Top-level navigation and utility links.

Ink Black text with 0px padding, visually distinct from surrounding content through context and font style rather than explicit styling. Hover state may show border.

### Simple Card (Dark)

**Role:** Content grouping, featured sections.

Ink Black background with 16px border-radius. No explicit padding inside from data, implying content controls its own spacing.

### Search Input (Outlined)

**Role:** Site search, form fields.

Transparent background with White Canvas placeholder/text, 1px White Canvas border. 0px border-radius. Features 1px vertical padding and 40px left padding for icon integration.

## Do's

- Prioritize Ink Black (#000000) and White Canvas (#ffffff) for all background, text, and border elements to maintain high contrast.
- Use ABCDiatypeLight (weight 300, -0.0370em at 80px) for prominent headlines to achieve a modern, airy feel.
- Employ ITCGaramondStdLtCond (weight 300, -0.0220em at 75px) for critical section titles, leveraging its condensed form for visual impact.
- Apply 0px border-radius to all filled buttons to maintain a sharp, deliberate aesthetic.
- Ensure section gaps consistently use 40px vertical spacing for clear content segmentation.
- Center all page content and adhere to a maximum width of 520px to create a focused reading experience.
- Utilize 1px borders with Ink Black (#000000) for interactive elements and content divisions to establish structure without heavy visual weight.

## Don'ts

- Avoid using any colors outside of the Ink Black (#000000) and White Canvas (#ffffff) palette for primary UI elements.
- Do not introduce rounded corners for primary buttons or input fields; maintain the strict 0px border-radius.
- Refrain from using shadows or artificial elevation, as the design system relies on stark color contrast and borders for depth.
- Do not deviate from the specified type scales and letter-spacing for ABCDiatypeLight or ITCGaramondStdLtCond; these are critical for brand typography.
- Avoid full-bleed layouts for main content sections; always constrain content to the 520px maximum width.
- Do not apply padding to inline interactive elements unless explicitly defined as a button variant; text links should primarily rely on their typographic styling.
- Never use generic block quotes or colored background for content emphasis; rely on typographic hierarchy and borders.

## Similar Brands

| Business | Why |
| --- | --- |
| Are.na | Stark, monochrome aesthetic with a focus on simple borders and typographic hierarchy for content organization. |
| The Browser Company (Arc) | Reliance on a minimal, high-contrast palette and distinct typography to define brand identity, with an emphasis on functional UI elements over decorative visuals. |
| AIGA (early websites) | Editorial, text-heavy approach with high regard for classic typography and a clean, almost academic presentation of information. |
| Stripe (documentation) | Clear, direct information architecture supported by a predominantly grayscale palette and subtle interactivity through outlined elements. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #ffffff
border: #000000
accent: no distinct accent color
primary action: #000000 (filled action)

Example Component Prompts:
1. Create a top navigation bar: Ink Black (#000000) full-bleed background, containing 'Index' logotype (IndexLogotype, 50px, weight 300, #ffffff). Right-aligned '• • •' (ABCDiatypeLight, 16px, weight 300, #ffffff) and '0' (ABCDiatypeLight, 16px, weight 300, #ffffff).
2. Create a Primary Action Button: #000000 background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
3. Generate a Dark Content Card: Ink Black (#000000) background, 16px border-radius. Contains a headline 'Learn at your own pace' (ABCDiatypeLight, 30px, weight 300, #ffffff, letter-spacing -0.45px) and a Ghost Border Button 'LEARN MORE' (1px Ink Black (#000000) border, White Canvas (#ffffff) text, 0px radius).

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519942048-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519942048-thumb.jpg |
