# Whop — Refero Style

- Refero URL: https://styles.refero.design/style/9eeab5f0-eece-4898-a1d2-2db48ac2bc7d
- Site URL: https://whop.com
- ID: 9eeab5f0-eece-4898-a1d2-2db48ac2bc7d
- Theme: light
- Industry: productivity
- Created: 2026-04-30T00:52:13.446Z
- Ranks: newest: 677, popular: 954, trending: 923

> Clean, bold, and energetic.

## Description

Whop presents a confident, high-contrast digital canvas with a striking orange accent. Typography is central, using large, tightly tracked sans-serif headlines for impactful statements and a comfortable mono-spaced font for technical details. Surfaces are predominantly white, creating a crisp backdrop for the energetic primary orange, grounded by a subtle shadow effect that adds minimal depth. Interactivity is clearly defined through the bold orange for primary actions and soft, rounded ghost buttons for secondary choices, balancing directness with approachability.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #ffffff | neutral | Page backgrounds, elevated card surfaces, main content areas |
| Dark Graphite | #202020 | neutral | Primary text, prominent headings, borders on dark elements |
| Medium Gray | #646464 | neutral | Secondary text, muted links, subtle icon fills |
| Light Gray | #838383 | neutral | Disabled states, helper text, less prominent button text |
| Border Silver | #bbbbbb | neutral | Hairline borders, subtle dividers, ghost button outlines |
| Very Light Gray | #e1e4e8 | neutral | Subtle decorative borders, minor shadow outlines |
| Dark Surface | #0a0a0a | neutral | Dark mode card backgrounds, specific elevated elements |
| Whop Orange | #fa4616 | brand | Orange wash for highlight backgrounds, decorative bands, and soft emphasis behind content. Do not promote it to the primary CTA color |
| Orange Shadow | #b62600 | accent | Orange outline accent for tags, dividers, and focused UI edges. Do not promote it to the primary CTA color |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| acidGroteskFont | Arial Black, sans-serif | 700 | 56px, 128px | 1.00 | Hero headlines, impactful display text — high-impact, tight tracking at large sizes provides a bold, modern voice. |
| Inter | system-ui, sans-serif | 400, 500, 600, 700 | 13px, 14px, 16px, 20px | 1.40, 1.43, 1.50 | Body copy, navigation links, button text, secondary headings — provides a readable, versatile sans-serif base with varied tracking for specific type sizes. |
| Geist Mono | SF Mono, Menlo, monospace | 500, 600 | 12px, 13px, 14px, 16px | 1.50, 1.70 | Code snippets, technical details, specific button labels — imparts a precise, technical feel where clarity of characters is paramount. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body-lg | 16 | 1.5 | -0.013 |
| subheading | 20 | 1.4 | -0.011 |
| heading | 56 | 1 | -0.03 |
| display | 128 | 1 | -0.03 |

## Spacing & Shape

```json
{
  "radius": {
    "misc": "16px",
    "tags": "8px",
    "cards": "24px",
    "forms": "8px",
    "buttons": "8px"
  },
  "elementGap": "24px",
  "sectionGap": "64px",
  "cardPadding": "24px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Main call-to-action

Filled with Whop Orange (#fa4616), white text (#ffffff) set in Inter weight 600, with 8px border radius and a distinct Orange Shadow (#b62600) for a confident, tangible feel.

### Ghost Secondary Button

**Role:** Alternative action, navigation

Transparent background, Dark Graphite (#202020) text in Inter weight 500, with 8px border radius and a 1px Border Silver (#bbbbbb) outline. Used for less prominent actions.

### Tab Button

**Role:** Category filtering, sub-navigation

Subtle button with transparent background, Light Gray (#838383) text in Inter weight 500 typically at 14px, with 8px border-radius and horizontal padding like 12px.

### Feature Card

**Role:** Information display, product showcases

Cards with Canvas White (#ffffff) background, 24px border radius. Used for containing content and typically has 24px internal padding. Some variants might have a Dark Surface (#0a0a0a) background with 12px radius.

### Subtle Background Card

**Role:** Grouped content section

A variant card with rgba(0, 0, 0, 0.06) background (effectively a very light gray), 24px border radius. Often used for subtle visual separation of content blocks.

## Do's

- Prioritize acidGroteskFont for any headline larger than 48px, always with letter-spacing -0.0300em and `Dark Graphite` text.
- Use `Whop Orange` (#fa4616) exclusively for primary interactive elements, brand iconography, and meaningful accents, never for decorative backgrounds.
- Apply an 8px border-radius consistently to all buttons, input fields, and small interactive elements.
- Maintain a clear visual hierarchy by limiting shadows primarily to the `Orange Shadow` (#b62600) on buttons, avoiding complex elevation stacks.
- Employ `Geist Mono` for all code-style text, ensuring fixed width and 1.5 lineHeight.
- Ensure `Canvas White` (#ffffff) is the dominant page background, reserving `Dark Surface` (#0a0a0a) for specific, clearly delineated card or container elements.
- Utilize 24px as a standard vertical and horizontal gap between major content sections and card grids.

## Don'ts

- Do not deviate from the specified type scale and letter spacing values for headlines; the tight tracking is a signature element.
- Avoid using multiple chromatic colors; `Whop Orange` is the sole brand accent and color should primarily be achromatic.
- Do not apply drop shadows to elements other than the Primary Action Button, as distinct elevation is kept minimal.
- Never use arbitrary gray shades; adhere strictly to `Dark Graphite`, `Medium Gray`, `Light Gray`, and `Border Silver` for all neutral text and border needs.
- Do not create rounded corners on cards that are not either 24px or 12px, as these are the established card radius values.
- Avoid background patterns or gradients unless they are an integral part of explicit primary calls-to-action and aligned with `Whop Orange`.
- Do not use `Whop Orange` text on `Canvas White` for body copy, as it is reserved for higher-impact accents.

## Layout

The page maintains a centered, max-width layout, approximately 1200px wide, framed by a full-bleed `Canvas White` background, creating a spacious feel. The hero section features a prominent, centered headline with a primary call-to-action. Content sections typically alternate between full-width centered text blocks and multi-column grids, notably a 5-column layout for showcasing product categories with individual mobile app previews. Vertical rhythm is established with generous `64px` section gaps, ensuring clear separation and comfortable reading. A sticky top navigation bar provides consistent access to key links.

## Imagery

The site uses product screenshots of mobile apps, meticulously framed within device mockups, sometimes on slightly varied gray backgrounds. These are mainly explanatory, showcasing the core product functionality with a direct, focused approach. Iconography is minimal, primarily leveraging outlined or filled monochrome icons (`Dark Graphite` or `Medium Gray`). The design avoids lifestyle photography or abstract illustrations, opting for a functional, product-centric visual language.

## Elevation

| Element | Style |
| --- | --- |
| Primary Action Button | rgb(182, 38, 0) 0px 3px 0px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Stripe | Both use a white canvas, high-contrast typography, and a single vibrant accent color to highlight actions and brand elements. |
| Vercel | Similar focus on code-friendly typography (mono fonts for technical content) and clean, product-showcasing UI with minimal decor. |
| Linear | Shares a white, spacious interface, emphasis on clear, functional typography, and reserved use of color for key interactive states. |
| Notion | Employs a clean, high-contrast, document-like aesthetic with a focus on powerful typography and ample white space. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #202020
background: #ffffff
border: #bbbbbb
accent: #fa4616
primary action: no distinct CTA color

Example Component Prompts:
No distinct primary action color was observed; use the extracted neutral button treatments instead of inventing a filled CTA color.
2. Create a Hero Headline: 'Join the future of work' using `Dark Graphite` (#202020) color, acidGroteskFont weight 700 at 56px, with letter-spacing -0.0300em.
3. Create a Ghost Secondary Button: Background transparent, `Dark Graphite` (#202020) text (Inter weight 500 at 16px), 8px border radius, 1px solid `Border Silver` (#bbbbbb) outline. Text content: 'Explore ways to earn'.
4. Create a Feature Card: `Canvas White` (#ffffff) background, 24px border radius, 24px padding inside. For body text, use `Dark Graphite` (#202020) Inter weight 400 at 16px.`

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510309020-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510309020-thumb.jpg |
