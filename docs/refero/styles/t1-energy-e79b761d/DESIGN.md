# T1 Energy — Refero Style

- Refero URL: https://styles.refero.design/style/e79b761d-f476-4c5d-8943-e31a58664e4d
- Site URL: https://t1energy.com
- ID: e79b761d-f476-4c5d-8943-e31a58664e4d
- Theme: light
- Industry: other
- Created: 2026-04-30T00:31:18.279Z
- Ranks: newest: 774, popular: 246, trending: 144

> Industrial Blueprint on White Marble

## Description

T1 Energy employs a sophisticated industrial blueprint aesthetic. It uses a restricted, monochromatic palette of deep charcoals, muted grays, and pure white to create a serious, high-tech atmosphere. Typography is precise and confident, often appearing in subtle weights or as a functional overlay. Elements feel lightweight with soft, large radius surfaces and minimal elevation, avoiding heavy borders or decorative flourishes, giving the impression of advanced machinery on a white canvas.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Nightfall Onyx | #0f0e12 | neutral | Footer backgrounds, deep surface accents, primary text on light backgrounds — providing strong contrast and a sense of gravitas |
| Platinum White | #ffffff | neutral | Hairline borders, dividers, input outlines, and card edges on light surfaces. Do not promote it to the primary CTA color |
| Technical Carbon | #322d2a | neutral | Secondary text, faint borders for cards and images, UI accents like dividers — creating visual structure without harshness |
| Cloud Chalk | #f0efe9 | neutral | Default page canvas background — acting as a slightly off-white, warm base that prevents starkness |
| Steel Gray | #8b8b8b | neutral | Backgrounds for ghost buttons, prominent navigation elements — providing a subtle interactive surface within the monochromatic scheme |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| T1 Sans | Inter | 300, 400 | 14px, 52px | 1.00, 1.30 | Primary brand typeface. Its light and regular weights are used for both body text and prominent headlines, setting a tone of understated technical authority. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 14 | 1 |  |
| display | 52 | 1.3 |  |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "80px",
    "buttons": "16px",
    "elements": "12px",
    "smallInteractive": "100px"
  },
  "elementGap": "8px",
  "sectionGap": "48px",
  "cardPadding": "22px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Header Button

**Role:** Primary navigation and action button within the hero overlay.

Text: Platinum White (#ffffff) on a semi-transparent Steel Gray (#8b8b8b) background at 50% opacity. Border-radius is 16px. Padding 17.5px vertical, 22.4px horizontal. Uses T1 Sans, weight 400.

### Pill Ghost Button

**Role:** Compact action button, often for secondary navigation or small interactive elements.

Text: Platinum White (#ffffff) on a semi-transparent Steel Gray (#8b8b8b) background at 50% opacity. Border-radius is 100px (pill shape). Minimal padding 4px vertical, 22.4px horizontal. Uses T1 Sans, weight 400.

### Transparent Card

**Role:** Displaying informational content without a distinct visual border or background, creating a light, airy feel.

Background is fully transparent (rgba(0,0,0,0)). No box shadow. Border-radius 0px. No padding.

### Rounded Informational Card

**Role:** Content container with a distinctly large rounded corner, providing a softer boundary.

Background is fully transparent (rgba(0,0,0,0)). No box shadow. Border-radius 80px. No padding.

### Learn More Button

**Role:** Secondary action button for deeper content exploration.

Background #ffffff, text in an unspecified dark neutral (likely Midnight Onyx or Technical Carbon). 1px border of #322d2a. Border-radius 12px. Padding 18px vertical, 22px horizontal. Uses T1 Sans, weight 400.

## Do's

- Prioritize Cloud Chalk (#f0efe9) and Platinum White (#ffffff) as dominant background colors to support the light theme.
- Use Nightfall Onyx (#0f0e12) or Technical Carbon (#322d2a) for all primary and secondary text for maximum readability.
- Apply T1 Sans consistently, leveraging weight 300 for a lighter touch on larger headlines and weight 400 for body text.
- Utilize 80px border-radius for large surface elements like cards and images to establish the signature soft, rounded aesthetic.
- For interactive elements such as buttons and navigation, prefer semi-transparent Steel Gray (#8b8b8b) backgrounds with Platinum White (#ffffff) text to maintain the clean, technical overlay appearance.
- Employ consistent section gaps of 48px to create a comfortable, structured vertical rhythm across pages.
- Use a base unit of 4px for all spacing decisions to maintain proportional consistency.

## Don'ts

- Avoid introducing vibrant, saturated colors outside of purely decorative image content; the system relies on a near-monochromatic palette.
- Do not use harsh, sharp-cornered elements on larger components; prioritize the 80px and 16px radii for their characteristic softness.
- Refrain from using strong drop shadows or complex elevation; the design system prefers minimal visual depth.
- Do not deviate from T1 Sans as the primary typeface; maintain its subtle weights and consistent letter spacing.
- Avoid small, tight letter spacing for body text; a uniform 0.0100em should be maintained.
- Do not overuse borders; when present, they should be subtle (#322d2a or #ffffff at 1px) to avoid a heavy appearance.
- Do not introduce strong visual gradients or complex background textures; the aesthetic leans towards clean, flat surfaces.

## Similar Brands

| Business | Why |
| --- | --- |
| Tesla | Monochromatic palette, emphasis on product and industrial imagery, and a clean, technical typography style. |
| Boston Dynamics | Focus on advanced technology, clean UI with minimal color, and a sophisticated, slightly futuristic feel through typography and sparse design elements. |
| Siemens Energy | Industrial and manufacturing focus, with a serious and authoritative visual language relying on grays, blacks, and whites to convey reliability. |
| NVIDIA | High-tech brand with an emphasis on cutting-edge visuals, clean layouts, and a predominantly dark/monochrome aesthetic that allows product imagery to stand out. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- text: #0f0e12
- background: #f0efe9
- border: #322d2a
- accent: #8b8b8b
- primary action: no distinct CTA color

Example Component Prompts:
- Create a ghost navigation button: background #8b8b8b at 50% opacity, text #ffffff, border-radius 16px, padding 17.5px 22.4px. Font T1 Sans, weight 400.
- Design a large rounded information card: transparent background, 80px border-radius. No padding.
- Build a secondary action button named 'Learn More': background #ffffff, text #0f0e12, 1px border of #322d2a, border-radius 12px, padding 18px 22px.
- Create a section headline: Text 'TOPCon' in T1 Sans, size 52px, weight 300, line-height 1.3, letter-spacing 0.0100em, color #0f0e12.

### Motion Philosophy

The design system uses expressive animations with moderate durations (primarily 0.25s and 0.5s) and 'ease' timing functions. Transitions commonly affect color, background-color, opacity, and transform properties, indicating a subtle, smooth interactivity rather than abrupt changes. Aim for fluid, understated feedback on user interactions.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509054633-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777509054633-thumb.jpg |
