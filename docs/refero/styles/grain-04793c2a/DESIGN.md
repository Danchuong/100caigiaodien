# Grain — Refero Style

- Refero URL: https://styles.refero.design/style/04793c2a-ca1a-4edd-a661-56c965e42aec
- Site URL: https://www.grain.com
- ID: 04793c2a-ca1a-4edd-a661-56c965e42aec
- Theme: light
- Industry: ai
- Created: 2026-04-30T00:47:11.896Z
- Ranks: newest: 697, popular: 797, trending: 668

> Bright AI green, focused workflow.

## Description

Grain presents a dynamic, AI-first productivity workspace characterized by a bright, open canvas and micro-interactions of vivid green accents. Typography is compact and precise, utilizing a variable font for both confident headlines and crisp body text. Subtle shadows and rounded forms add a friendly, approachable polish to components, avoiding heavy elevation for a lightweight feel.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas White | #fafafa | neutral | Page backgrounds, card surfaces, ghost button backgrounds |
| Rich Black | #000000 | neutral | Primary text, strong headings, critical borders |
| Deep Graphite | #313232 | neutral | Secondary text, subheadings, darker borders and accents |
| Inkwell | #141414 | neutral | Muted text on cards, subtle borders, alternative primary text |
| Dusk Gray | #707070 | neutral | Body text, less prominent paragraph text |
| Cloud Gray | #f0f0f0 | neutral | Subtle background shifts, faint borders, link backgrounds |
| Muted Stone | #545454 | neutral | Muted body text, secondary informational text |
| Silver Dust | #c9c9c9 | neutral | Hairline separators, very faint borders |
| Pewter | #949494 | neutral | Placeholder text, inactive icons, subtle link text |
| Pale Ash | #d6d6d6 | neutral | Light button borders, delicate card outlines |
| Light Mist | #e6e6e6 | neutral | Subtle button backgrounds, background gradients |
| Grain Green | #009959 | brand | Primary CTA buttons, active states, brand highlights — a confident, energetic green that signals action and growth |
| Leafy Green Wash | #00b96c | brand | Decorative background fills, subtle brand accents |
| Neon Green Accent | #00ff95 | accent | Vivid decorative highlight for icons and illustrations, adding a tech-forward feel |
| Sky Blue Accent | #3de1ff | accent | Secondary vivid accent for iconography and decorative elements, complementing the green |
| Ambient Gradient | #1ee592 | accent | Subtle background gradient for elevated sections or visual breaks, adding depth with brand colors |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter Variablefont Slnt Wght | Inter | 400, 500, 600 | 12px, 13px, 14px, 16px, 18px, 20px, 32px, 36px | 1.30, 1.43, 1.50, 1.60 | Body text, navigation, card text, and most headings — its variable nature ensures precision across all uses. The subtle negative letter-spacing for larger sizes enhances visual density without feeling cramped. |
| Poppins | Poppins | 600 | 38px | 1.25 | High-impact headlines, adding a touch of distinct professionalism and visual weight to key statements. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.6 | 0 |
| body | 14 | 1.5 | -0.14 |
| subheading | 18 | 1.43 | -0.36 |
| heading | 32 | 1.3 | -0.96 |
| display | 38 | 1.25 | 0 |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "24px",
    "cards": "10px",
    "icons": "10px",
    "images": "14px",
    "buttons": "8px",
    "default": "10px",
    "heroElements": "2px"
  },
  "elementGap": "8px",
  "sectionGap": "96px",
  "cardPadding": "24px",
  "pageMaxWidth": null
}
```

## Components

### Primary Filled Button

**Role:** Call to Action

Solid 'Grain Green' background (#009959) with 'Canvas White' (#fafafa) text, 8px border-radius, and 16px vertical, 32px horizontal padding. Signals immediate action.

### Ghost Button

**Role:** Secondary Action

Transparent background with 'Rich Black' (#000000) text and 'Pale Ash' (#d6d6d6) border, 8px border-radius, 16px vertical, 32px horizontal padding. Used for less prominent actions or navigation.

### Tertiary Minimal Button

**Role:** Inline Action/Navigation

Fully transparent background with 'Rich Black' (#000000) text, 8px border-radius, and 8px padding. Appears as a text link with button-like padding on hover/focus.

### Accent Filled Button

**Role:** Contextual Action

Light 'Light Mist' (#e6e6e6) background with 'Inkwell' (#141414) text, 8px border-radius, 16px vertical, 20px horizontal padding. Used for contextual actions or less emphasized calls to action.

### Feature Card

**Role:** Content Grouping

Solid 'Canvas White' (#fafafa) background with a 10px borderRadius, 24px padding on all sides, and no box-shadow. Designed for grouping content or features with a clean, light aesthetic.

### Inset Shadow Card

**Role:** Subtle Visual Separation

Transparent background with a soft inset shadow (rgba(0, 0, 0, 0.05) 0px 0px 12px 0px inset) and a large 40px borderRadius. Creates a distinct, elevated surface without strong outer shadows.

### Pill Tag

**Role:** Categorization/Meta-information

Small, information-carrying component with 24px border-radius, typically for labels or status indicators. Utilizes 'Cloud Gray' (#f0f0f0) for background and 'Rich Black' (#000000) text.

## Do's

- Prioritize 'Grain Green' (#009959) for all primary call-to-action backgrounds and active states to guide user interaction.
- Use 'Canvas White' (#fafafa) as the dominant background for most page sections and card surfaces to maintain a bright, open aesthetic.
- Apply Inter Variablefont for all body text and most headings; leverage its variable weights to achieve precise visual hierarchy and density.
- Maintain a comfortable rhythm with a 24px default card padding and 8px element gap for consistent content grouping.
- Employ consistent 10px border-radius for general components like cards, buttons, and icons, with specific 8px for primary buttons and 24px for pill-shaped tags.
- Utilize 'Rich Black' (#000000) for all primary body text and significant headlines to ensure strong contrast and readability against light backgrounds.
- Integrate the 'Ambient Gradient' where visual breaks or subtle section transitions are needed to add depth with branded color washes.

## Don'ts

- Avoid using multiple chromatic colors simultaneously; green accents should predominantly carry the brand's 'on' state.
- Do not introduce strong, opaque box-shadows on cards or surfaces; prefer subtle inset shadows or no shadows to keep components lightweight.
- Refrain from using bold or heavy weights for large display text; the system favors lighter weights like Inter 400-600, reserving Poppins 600 for specific headline impact.
- Do not deviate from the established border-radius values; consistency in rounded corners is crucial for the brand's approachable feel.
- Avoid using any color other than 'Grain Green' (#009959) for the primary call-to-action background, as this dilutes brand identity.
- Do not apply excessive letter-spacing on text; leverage negative tracking on larger text sizes for a compact, intentional look.
- Avoid full-bleed imagery unless explicitly specified for hero sections; most content should live within well-defined, contained areas.

## Layout

The site employs a max-width contained layout rather than full-bleed, with content centered. The hero section often features a split layout or a prominent visual element (like a product screenshot) on one side, balanced by text on the other, over a subtle background gradient. Sections generally feature consistent vertical spacing, often with alternating light and very light background shades creating a subtle rhythm. Content is arranged in alternating text-and-image blocks or compact multi-column card grids for features, maintaining a clear visual structure. Navigation is a standard top bar, sticky on scroll, with clear CTAs on the right.

## Imagery

Imagery style is product-focused, featuring clean product screenshots and UI elements often presented within rounded device mockups. Photography, when present, is secondary and often within product context (e.g., video call screenshots). Icons are primarily monochrome, outlined, and contribute to clarity rather than decoration. The overall density is balanced, allowing UI elements and text to dominate, with imagery serving explanatory or demonstrative roles.

## Similar Brands

| Business | Why |
| --- | --- |
| Otter.ai | Clean, light UI with functional green accents for AI-driven transcription services. |
| Fellow.app | Productivity SaaS with bright, minimalist design, structured layouts, and clear typographic hierarchy. |
| Headway | SaaS marketing site visual language, using subtle gradients and card-based content structures on a light canvas. |
| Dovetail | Clean light background, structured content, and focused use of a single accent color for a user research platform. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #fafafa
border: #d6d6d6
accent: #00ff95
primary action: #009959 (filled action)

Example Component Prompts:
1. Create a primary hero call-to-action button: 'Grain Green' background (#009959), 'Canvas White' text, Inter Variablefont 600, 16px size, 8px border-radius, 16px vertical and 32px horizontal padding.
2. Design a feature card: 'Canvas White' background (#fafafa), 10px border-radius, 24px padding. Headline in Inter Variablefont 500 at 18px size (#000000), body text in Inter Variablefont 400 at 14px size (#707070).
3. Implement a ghost navigation button: Transparent background, 'Rich Black' (#000000) text, 'Pale Ash' (#d6d6d6) border, Inter Variablefont 400 at 14px size, 8px border-radius, 8px padding.
4. Build a section header: Poppins 600 at 38px size (#000000), 'Dusk Gray' (#707070) subheading in Inter Variablefont 400 at 18px size, with 96px section gap below.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510005073-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510005073-thumb.jpg |
