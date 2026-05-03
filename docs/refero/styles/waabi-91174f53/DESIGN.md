# Waabi — Refero Style

- Refero URL: https://styles.refero.design/style/91174f53-6770-4398-b3e7-ad14b1c39b6d
- Site URL: https://waabi.ai
- ID: 91174f53-6770-4398-b3e7-ad14b1c39b6d
- Theme: light
- Industry: ai
- Created: 2026-04-30T00:16:46.235Z
- Ranks: newest: 847, popular: 1314, trending: 1300

> monochromatic impact with magenta precision

## Description

Waabi operates on a robust, authoritative visual language, characterized by stark contrasts between light and dark surfaces and bold, compact typography. A single vibrant magenta provides functional accents, drawing attention to calls-to-action and active states against the predominantly monochromatic palette. Components are designed for clarity and impact, with generous rounded corners hinting at a friendly usability layer beneath the serious brand posture. The overall impression is one of confident, high-tech efficiency.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Graphite | #191818 | neutral | Primary text, deep surface backgrounds, strong borders — establishing a high-contrast foundation |
| Canvas White | #ffffff | neutral | Page backgrounds, primary card surfaces, most content areas — serving as the clean default canvas |
| Cloud Gray | #e8e6e3 | neutral | Secondary card backgrounds, subtle section dividers, muted background fills — adding a soft, layered depth |
| Silver Pine | #808080 | neutral | Secondary text, subtle borders, inactive states — providing lower contrast detail without disappearing |
| Soft Fog | #8c8b8b | neutral | Helper text, ghost button borders, subtle lines — for less prominent informational elements |
| Steel Light | #cccccc | neutral | Divider lines, subtle card borders — for thin graphical separation |
| Muted Stone | #d1d5dc | neutral | Card backgrounds, subtle graphic elements — offering an alternative light neutral surface |
| Accent Magenta | #ff2c6b | accent | Primary action buttons, active indicators, decorative highlights — the sole vibrant accent for interactivity and emphasis |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Zagma | Montserrat | 400 | 10px, 16px, 20px, 24px, 40px, 60px, 80px, 130px, 150px | 0.85, 0.90, 1.10, 1.20, 1.25, 1.40, 1.50 | Headlines, expressive titles, and large display text — characterized by its expansive tracking and compact line height, making it feel vast yet impactful. |
| NeueHaas | Open Sans | 400, 500 | 10px, 11px, 12px, 15px | 1.40, 1.60 | Body text, captions, and functional UI labels — providing a readable, slightly narrow contrast to the display font. Its subtle positive letter-spacing ensures legibility at smaller sizes. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body-sm | 15 | 1.4 | 0.15 |
| subheading | 20 | 1.4 | -0.6 |
| heading | 40 | 1.25 | -1.2 |
| heading-lg | 80 | 1.2 | -2.4 |
| display | 150 | 0.85 | -7.2 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "12px",
    "buttons": "50px",
    "containers-lg": "63.4059px"
  },
  "elementGap": "16px",
  "sectionGap": "96px",
  "cardPadding": "24px",
  "pageMaxWidth": "1200px"
}
```

## Components

### Primary Action Button

**Role:** Main CTA for key actions

Solid filled button with Accent Magenta background (#ff2c6b), Canvas White text (#ffffff), and a generous 50px border-radius for a soft, pill-like appearance. Padding is 0px top/bottom and 24px left/right, relying on line-height for vertical alignment.

### Ghost Button - Light Text

**Role:** Secondary action on dark backgrounds

Transparent background with Canvas White text (#ffffff). Border color is a very subtle transparent white, `oklab(0.999994 0.0000455678 0.0000200868 / 0.15)`, and a 1.67772e+07px radius for maximum rounding. No explicit padding, text-based sizing.

### Ghost Button - Dark Text

**Role:** Secondary action on light backgrounds

Transparent background with Midnight Graphite text (#191818). Border color is a subtle transparent gray, `oklab(0.210168 0.00151306 0.000472009 / 0.15)`, and a 1.67772e+07px radius. No explicit padding, text-based sizing.

### Link Button

**Role:** Tertiary action for navigation or emphasis

Styled as a text link with transparent background, Midnight Graphite text (#191818). Padding is 0px top/bottom and 10px left/right, no border or radius.

### Neutral Card - Light

**Role:** Content container on light backgrounds

Cloud Gray background (#e8e6e3) with a 12px border-radius and no box-shadow, for a flat, matte surface. No intrinsic padding.

### Neutral Card - Dark

**Role:** Content container on dark backgrounds

Midnight Graphite background (#191818) with a 12px border-radius and no box-shadow, creating a strong contrast or section break. No intrinsic padding.

### Muted Card

**Role:** Subtle content container on light backgrounds

Muted Stone background (#d1d5dc) with a 12px border-radius and no box-shadow, for a slightly warmer, less stark surface than Cloud Gray. No intrinsic padding.

## Do's

- Always use a 12px border-radius for all content cards to maintain a consistent soft edge.
- Apply Accent Magenta (#ff2c6b) exclusively for primary calls-to-action or critical active states.
- Prioritize large, compact 'Zagma' typography for headlines, using its negative letter-spacing for visual density.
- Utilize Cloud Gray (#e8e6e3) and Canvas White (#ffffff) as the primary alternating background surfaces for section differentiation.
- Ensure interactive elements like buttons have a 50px border-radius, creating a distinct pill shape.
- Break up large content sections with a sectionGap of 96px for ample breathing room.
- Use NeueHaas for all body text and UI labels, ensuring letter-spacing of 0.01em or 0.02em for legibility.

## Don'ts

- Do not introduce new vibrant colors outside of Accent Magenta (#ff2c6b); maintain the strict monochromatic palette.
- Avoid excessive use of drop shadows; the design relies on bold color blocks and border-radius for visual separation.
- Refrain from using long line lengths for body text; keep text blocks concise to maintain readability with NeueHaas.
- Do not deviate from the established type scale; maintain the precise sizes and letter-spacing for Zagma and NeueHaas.
- Avoid small, subtle changes in neutral tones for background; use the defined Cloud Gray, Canvas White, Midnight Graphite, and Muted Stone for clear surface distinction.
- Do not use generic square corners; aim for the established soft radii on all containers and interactive elements.
- Never use text as the primary call-to-action unless it is a defined Link Button with appropriate padding and transparent background.

## Layout

The page maintains a centered, max-width layout, typically around 1200px. The hero section often features a large, impactful Zagma headline against a clean background. Sections alternate between Canvas White and Cloud Gray or Midnight Graphite, creating clear visual segmentation with a consistent vertical rhythm of 96px section gaps. Content is arranged in alternating text-left/image-right or vertical stacks, often utilizing 2-column or 3-column card grids for features and insights. Navigation is a sticky top bar with a centralized logo and right-aligned links. The overall density is comfortable, with generous white space around elements.

## Imagery

Photography features tight product crops of trucks for self-driving technology or abstract, graphic representations of digital systems. Images are usually contained within cards or masked shapes, never full-bleed. Illustrations are minimal, predominantly flat, geometric, and often outlined, using the brand's monochromatic colors or Accent Magenta. Icons are outlined, simple, and monochrome, often appearing as subtle functional elements. Imagery serves to showcase technology and provide visual context in a clean, contained manner rather than decorative atmosphere, often presented against stark white or dark backgrounds.

## Similar Brands

| Business | Why |
| --- | --- |
| Aurora | Both use a high-tech, somewhat stark aesthetic with limited color palettes, focusing on product and technology imagery. |
| Waymo | Share an emphasis on clear, functional UI with a preference for clean whites and grays, using a single accent color for interaction. |
| Plus.ai | Exhibit similar brand confidence through bold typography and a minimal, high-contrast visual design, common in self-driving technology companies. |
| TuSimple | Both feature a corporate yet modern feel, relying on strong visual segments and carefully chosen typography to convey authority without being overly decorative. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #191818
background: #ffffff
border: #191818
accent: #ff2c6b
primary action: #ff2c6b (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #ff2c6b background, #000000 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
2. Create a content card: Cloud Gray background (#e8e6e3), 12px radius, no shadow. Inside, have a subheading at 40px Zagma weight 400, #191818, letter-spacing -1.2px. Below that, a paragraph of body text at 15px NeueHaas weight 400, #808080, line-height 1.4, letter-spacing 0.15px. Ensure card has 24px padding.
3. Create a navigation button for a dark background: Ghost Button - Light Text. Label it 'Home' with Canvas White text (#ffffff). Ensure it has a very subtle transparent white border.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508183607-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508183607-thumb.jpg |
