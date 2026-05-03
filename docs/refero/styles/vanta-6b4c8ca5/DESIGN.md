# Vanta — Refero Style

- Refero URL: https://styles.refero.design/style/6b4c8ca5-476e-442b-b713-d5fc58cf04ac
- Site URL: https://www.vanta.com
- ID: 6b4c8ca5-476e-442b-b713-d5fc58cf04ac
- Theme: light
- Industry: saas
- Created: 2026-04-30T00:51:42.285Z
- Ranks: newest: 681, popular: 225, trending: 157

> Regal Clarity on White Canvas

## Description

Vanta projects a refined, authoritative presence through a primarily achromatic palette accented by deep, vivid violets. Stark white backgrounds provide a sense of expansive clarity, acting as a clean canvas for content. Typography is precise and impactful, balancing a custom sans-serif for functional elements with a sophisticated serif for headlines. Components are lightweight and well-defined by subtle borders, emphasizing content over heavy ornamentation. Elevation is minimal, achieved through soft borders and contained interactions rather than prominent shadows.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, card surfaces, form inputs, button backgrounds |
| Background Snow | #f7f8fa | neutral | Subtle section backgrounds, alternative light surfaces |
| Cloud Gray | #eaeaf1 | neutral | Subtle accents for UI elements, light border accents |
| Border Fog | #dfdfe9 | neutral | Functional borders, dividers, subtle outlines |
| Muted Ash | #9e9fb7 | neutral | Secondary borders, ghost button outlines, disabled states |
| Stone Gray | #6d6e87 | neutral | Tertiary text, subtle fills, supporting icons |
| Dark Charcoal | #484960 | neutral | Secondary text, link text, muted headings |
| Midnight Ink | #181822 | neutral | Primary text, main headings, critical information |
| Deep Plum | #260048 | brand | Footer background, secondary brand elements, text on vivid backgrounds |
| Vanta Purple | #5e05c4 | brand | Primary action buttons, interactive elements, brand accents |
| Royal Violet | #8f47d5 | brand | Link colors, badge text, decorative icon accents |
| Misty Lavender | #ddd6ff | brand | Hero background, soft brand washes |
| Sky Lavender | #cdd2f8 | brand | Supporting background color, subtle brand elevation |
| Warning Gold | #ffbe0f | semantic | Warning badges, informational highlights |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter Variable | system-ui | 400, 500, 600, 700 | 10px, 12px, 14px, 16px, 18px, 20px, 24px, 32px, 40px | 1.30, 1.35, 1.43, 1.50, 1.60 | Functional UI text: body copy, navigation, buttons, labels. Its variable nature allows for precise weight control for hierarchy. |
| Reckless | serif | 400, 500 | 30px, 42px, 56px, 72px, 90px | 1.10, 1.20, 1.25 | Headline text, where its serif elegance softens the technical feel of the content. The lighter weights provide authority through grace. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.6 | -0.2 |
| body | 16 | 1.5 | -0.32 |
| subheading | 20 | 1.43 | -0.4 |
| heading-sm | 24 | 1.35 | -0.48 |
| heading | 32 | 1.3 | -0.64 |
| heading-lg | 42 | 1.1 | -0.714 |
| display | 56 | 1.1 | -0.784 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "16px",
    "inputs": "999px",
    "buttons": "999px",
    "default": "8px"
  },
  "elementGap": "16px",
  "sectionGap": "32px",
  "cardPadding": "32px",
  "pageMaxWidth": null
}
```

## Components

### Primary Filled Button

**Role:** Call to action button for primary actions

Filled with Vanta Purple (#5e05c4), white text (Vanta White), and a full-rounded (999px) border. Padding is 8px vertical, 12px horizontal.

### Ghost Navigation Button

**Role:** Secondary navigation or subtle actions

Transparent background, Midnight Ink (#181822) text, minimal padding (8px vertical, 10.4px horizontal) and a full-rounded (999px) border.

### Outlined Input Field

**Role:** Text input areas for forms

Canvas White (#ffffff) background, Midnight Ink (#181822) text, full-rounded (999px) border of Muted Ash (#9e9fb7) at 1.5px. Padding is 13.6px vertical, 16px horizontal.

### Elevated Content Card

**Role:** Container for features or grouped information

Canvas White (#ffffff) background, 16px border-radius, no shadow. Padding internal content at 32px all around.

### Feature Highlight Card

**Role:** Cards within hero section or for key features

Transparent background, 0px border-radius, no shadow. Internal padding of 32px.

### Brand Chip Badge

**Role:** Informational tags or status indicators

Transparent background with Royal Violet (#8f47d5) text. No padding or border-radius.

### Warning Badge

**Role:** Notification or status badge indicating a warning

Warning Gold (#ffbe0f) background with Deep Plum (#260048) text. No border-radius, 4px horizontal padding.

## Do's

- Use Midnight Ink (#181822) for all primary body text and main headings to ensure strong contrast and readability.
- Apply Canvas White (#ffffff) as the default background for most content sections and interactive components.
- Utilize Vanta Purple (#5e05c4) exclusively for primary calls to action, such as 'Get a demo' buttons.
- Maintain a 999px border-radius for all interactive elements like buttons and input fields to ensure a consistent friendly, modern feel.
- Establish hierarchy in headings by using Reckless font, applying its smaller letter-spacing values (-0.0180em to -0.0120em) for larger sizes.
- Use Border Fog (#dfdfe9) or Muted Ash (#9e9fb7) for all hairline borders and subtle dividers.
- Prioritize Inter Variable for all functional text, maintaining -0.0020em letter-spacing for consistency.

## Don'ts

- Do not introduce strong shadows; rely on subtle borders or background color shifts for element separation.
- Avoid using highly saturated colors for large background areas; reserve them for accents and interactive elements.
- Do not deviate from the full-rounded (999px) radius for buttons and input fields; this is a signature shape.
- Never use Reckless font for body text or other small functional elements; it is reserved for headlines.
- Do not use generic blue for links or interactive elements; all brand interaction should use Royal Violet (#8f47d5) or Vanta Purple (#5e05c4).
- Avoid dense stacking of information; provide ample white space, leveraging Cloud Gray (#eaeaf1) or Background Snow (#f7f8fa) for breathing room.
- Do not use bright or vibrant photography; imagery should be understated, product-focused, or abstract to allow UI to dominate.

## Layout

The page uses a maximum-width contained layout rather than full-bleed, with content centered. The hero section is full-bleed but employs a lighter background tone (Misty Lavender) with a large, centered headline and a centered sign-up form. Sections alternate a subtle visual rhythm, primarily using Canvas White and Background Snow. Content is typically arranged in clear, symmetrical blocks, often with centered stacks for text and calls to action. Feature sections use a 3-column card grid. Vertical spacing between logical blocks is generous, providing a comfortable density. Navigation is a persistent top bar featuring a minimal logo, clear text links, and distinct 'Log in' (ghost) and 'Get a demo' (filled) buttons.

## Imagery

This site prominently features product screenshots and abstract, geometric illustrations. Product shots are typically contained within cards, showcasing clean UI with minimal surrounding context, emphasizing functionality. Illustrations are often flat or subtly dimensional, using muted brand colors or achromatic tones, serving as decorative accents or explanatory visuals. Icons are predominantly outlined, featuring a moderate stroke weight in either Midnight Ink or Royal Violet, providing clear visual cues without being heavy. Imagery serves as explanatory content, clarifying complex processes rather than creating mood. The overall density is balanced, with imagery carefully placed to break up text blocks without overwhelming the content.

## Similar Brands

| Business | Why |
| --- | --- |
| Ramp | Similar achromatic background palette with a single bright, vivid accent color for CTAs and interactive states, paired with strong typography. |
| Gusto | Adoption of a distinct sans-serif for UI and a more expressive serif for headlines, creating a dual typographic personality. |
| Linear | Emphasis on subtle borders and minimal elevation for component definition over heavy shadows, creating a lightweight feel. |
| Okta | Clean, enterprise-focused SaaS aesthetic with structured layouts and a strong focus on readability and clear information hierarchy. |
| Brex | Prominent use of a deep, rich purple as a primary brand accent against a largely neutral background for a premium feel. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- text: #181822
- background: #f7f8fa
- border: #dfdfe9
- accent: #5e05c4
- primary action: #5e05c4 (filled action)

Example Component Prompts:
- Create a hero section with a Misty Lavender (#ddd6ff) background. Headline 'Trust is everything' at 56px Reckless weight 500, #181822, letter-spacing -0.784px. Below, a Ghost Navigation Button with 'Learn more' text in #181822, border #9e9fb7, 999px radius, 8px vertical 10.4px horizontal padding.
- Design a feature card: Canvas White (#ffffff) background, 16px radius, no shadow. Inside, use a heading 'Compliance' at 24px Inter Variable weight 700, #181822, line-height 1.35. Body text at 16px Inter Variable weight 400, #484960.
- Create a Primary Action Button: #5e05c4 background, #ffffff text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
- Create an input field: Canvas White (#ffffff) background, 999px border-radius, border 1.5px solid Muted Ash (#9e9fb7). Placeholder text should be #484960 at 16px Inter Variable weight 400. Internal padding 13.6px vertical, 16px horizontal.
- Display a Warning Badge with text 'Review' using Warning Gold (#ffbe0f) background and Deep Plum (#260048) text, no border-radius and 4px horizontal padding.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510253081-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510253081-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/6b4c8ca5-476e-442b-b713-d5fc58cf04ac-1777581568717-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/6b4c8ca5-476e-442b-b713-d5fc58cf04ac-1777581568717-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/6b4c8ca5-476e-442b-b713-d5fc58cf04ac-1777581568717-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/6b4c8ca5-476e-442b-b713-d5fc58cf04ac-1777581568717-preview-detail-poster.jpg |
