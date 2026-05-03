# Felt — Refero Style

- Refero URL: https://styles.refero.design/style/127a4efb-685c-42c3-83eb-72bb410a8429
- Site URL: https://www.felt.com
- ID: 127a4efb-685c-42c3-83eb-72bb410a8429
- Theme: dark
- Industry: saas
- Created: 2026-04-30T03:28:31.422Z
- Ranks: newest: 144, popular: 1213, trending: 1223

> Deep forest data canvas

## Description

Felt employs a dark, command-center aesthetic, with a cool green canvas creating a sense of depth and focus for data visualization. Typography is crisp and authoritative, striking a balance between traditional elegance and modern clarity. Functional elements are highlighted with a warm amber tone, contrasting effectively with the predominantly muted green and deep grayscale palette. Components are lightweight and precise, often featuring subtle borders and minimal radii to maintain a structured yet unobtrusive interface.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Forest Canvas | #3d521e | neutral | Primary page background, large surface areas, and section dividers — establishes the deep, nature-inspired base hue |
| Nightfall Surface | #314218 | neutral | Secondary surface background for cards and elevated components, providing a slight visual lift from the main canvas |
| Text Primary | #eeeeee | neutral | Primary text color for headlines and main content — offers strong contrast against dark backgrounds |
| Text Secondary | #ffffff | neutral | Secondary text and critical UI elements like navigation links and active states, providing maximum visibility |
| Text Tertiary | #333333 | neutral | Muted text for secondary information, helper text, and subtle details, typically reserved for light-on-dark scenarios (e.g. within a UI window) |
| Warm Ember | #dc8c46 | brand | Primary action color for buttons, links, and interactive elements — a vivid highlight that guides user interaction. This serves as the brand's key accent color |
| Muted Sage | #64754b | neutral | Subtle interactive backgrounds and borders for ghost buttons or less prominent calls to action |
| Felt Deepest Green | #212f0c | neutral | Darkest background for UI elements like input fields or specialized dark mode components, providing maximum depth |
| Felt Darkest Base | #18210c | neutral | Base layer for overlaying dark components or deepest UI sections, establishing the lowest visual point |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Gt Alpina Standard | Georgia | 300, 400 | 28px, 36px, 43px, 46px, 50px, 86px | 0.80, 0.96, 1.00, 1.11, 1.33 | Headlines and prominent display text — weight 300 offers a counter-intuitive lightness for large sizes, creating an effect of authority through restraint rather than volume. Weight 400 rounds out the display usage. |
| Atlasgrotesk Cy Web | Inter | 300, 400, 500, 700 | 12px, 14px, 16px, 18px, 19px, 20px | 1.00, 1.11, 1.20, 1.25, 1.30, 1.33, 1.43, 1.50, 1.56 | Body text, navigation, and functional UI elements — the slight 0.033em letter-spacing adds a subtle spaciousness, optimizing legibility for interface-heavy content. |
| Arial | sans-serif | 400 | 14px, 16px | 1.25, 1.33, 1.43 | Fallback and specific utility text — used sparingly for system-level information and certain UI labels. |
| Times New Roman | serif | 400 | 36px, 101px | 0.88, 2.46 | Decorative or highly specific, content-driven callouts, leveraging its traditional serif feel for emphasis. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 | 0.33 |
| body-sm | 14 | 1.43 | 0.46 |
| body | 16 | 1.33 | 0.53 |
| subheading | 18 | 1.25 | 0.59 |
| heading-sm | 20 | 1.2 | 0.66 |
| heading | 28 | 1.11 | -1.12 |
| heading-lg | 50 | 1 | -1.65 |
| display | 86 | 0.8 | -3.44 |

## Spacing & Shape

```json
{
  "radius": {
    "buttons": "20px",
    "default": "6px"
  },
  "elementGap": "12px",
  "sectionGap": "24px",
  "cardPadding": "12px",
  "pageMaxWidth": null
}
```

## Components

### Primary Action Button

**Role:** Main call-to-action button, drawing attention with the brand's accent color.

Background: Warm Ember (#dc8c46), Text: Text Primary (#eeeeee), Padding: 16px vertical, 20px horizontal. Radius: 20px. Font: Atlasgrotesk Cy Web, weight 400.

### Secondary Action Button

**Role:** Subtle button with a transparent background, used for secondary actions or navigation.

Background: rgba(255, 255, 255, 0.2), Text: Text Secondary (#ffffff), Border: 1px solid Text Primary (#eeeeee - inferred, data indicates white border on transparent button). Padding: 16px vertical, 20px horizontal. Radius: 20px. Font: Atlasgrotesk Cy Web, weight 400.

### Ghost Navigation Button

**Role:** Navigation items in the header, acting as ghost buttons.

Background: transparent, Text: Text Secondary (#ffffff), Border: 1px solid White (#ffffff), Padding: 16px vertical, 32px horizontal (adjusts for text length). Radius: 0px. Font: Atlasgrotesk Cy Web, weight 400.

### Outline Link Button (Warm Ember)

**Role:** Outlined button or link, using the brand accent color for border and text.

Background: transparent, Text: Warm Ember (#dc8c46), Border: 1px solid Warm Ember (#dc8c46), Padding: 14px vertical, 14px horizontal. Radius: 0px. Font: Atlasgrotesk Cy Web, weight 400.

### Badge Neutral

**Role:** Inline labels or small informational markers.

Background: transparent, Text: rgba(255, 255, 255, 0.8), Radius: 0px.

### UI Container Card

**Role:** Small, contained UI panels like the footer or specific data widgets.

Background: Felt Deepest Green (#212f0c), Padding: typically 12px or 24px vertical, 24px horizontal. Radius: 6px. Shadow: rgba(0, 0, 0, 0.2) 0px 2px 5px 0px.

## Do's

- Prioritize Forest Canvas (#3d521e) as the dominant background color for most sections, establishing the brand's deep green aesthetic.
- Use Warm Ember (#dc8c46) exclusively for primary calls to action and critical interactive elements to maintain its high visual impact.
- Employ Gt Alpina Standard weight 300 for all major headings to convey authority through subtle, elegant typography.
- Always use Atlasgrotesk Cy Web with 0.033em letter-spacing for body text and UI labels to ensure clarity and consistency.
- Apply a 20px border-radius to all filled buttons to create a softer, more approachable interactive element.
- Maintain a clear distinction between surface levels using Felt Darkest Base (#18210c), Felt Deepest Green (#212f0c), and Nightfall Surface (#314218) for progressively elevated elements.
- Utilize 12px for `elementGap` to ensure comfortable spacing between interactive elements and components.

## Don'ts

- Do not use saturated colors other than Warm Ember for accentuation; maintain the muted green and achromatic palette elsewhere.
- Avoid large, uncontained blocks of light or white content; surfaces should primarily be dark or muted green.
- Do not vary the letter-spacing for Atlasgrotesk Cy Web; the 0.033em value is a signature characteristic.
- Do not use standard serif fonts for UI elements; Times New Roman should be reserved for decorative text.
- Avoid excessive use of drop shadows; limit them to clearly elevated UI components like deep container cards.
- Never use `0px` border-radius for action buttons, as 20px is core to their visual identity.
- Do not introduce strong gradients in backgrounds; the system relies on solid color fields and subtle shifts in dark green tones.

## Layout

The page uses a maximum-width contained layout, though the hero section often spills into a full-bleed background. The hero features a large centered headline and calls to action over a dark green background. Content sections follow a vertical rhythm with consistent spacing, often alternating between centered stacks and split layouts with text on one side and a visual (map, screenshot) on the other. A notable element is the embedded dark UI panel, which frequently overlays sections for dynamic product showcasing. The navigation is a sticky top bar with ghost buttons and a prominent 'Sign Up' button.

## Imagery

Imagery primarily consists of maps and GIS data visualizations, often presented as embedded UI elements or product screenshots. When present, images are contained within the dark UI, sometimes with subtle shadows. There's a minimal use of abstract graphics or photography. Icons are generally simple, outlined, and monochromatic, used functionally to represent actions or categories within the dark UI.

## Elevation

| Element | Style |
| --- | --- |
| UI Container Card | rgba(0, 0, 0, 0.2) 0px 2px 5px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Linear | Dark UI, structured layout, and a single accent color for interaction and brand differentiation. |
| Replit | Code editor-like aesthetic, dark background, and emphasis on functional UI elements over decorative imagery. |
| Figma (dark mode) | Highly functional dark interface where design tooling is paramount, with controlled use of color for interaction and status. |
| Vercel | Developer-centric, dark-themed platform with clean typography and a focus on essential UI components. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- Text: #eeeeee
- Background: #3d521e
- Border: #eeeeee (neutral), #dc8c46 (accent)
- Accent: #dc8c46
- primary action: #ffffff (filled action)

Example Component Prompts:
1. Create a Primary Action Button: #ffffff background, #eeeeee text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519689804-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777519689804-thumb.jpg |
